<?php defined('SYSPATH') OR die('No direct access allowed.');

require MODPATH.'facebook-php-sdk/src/facebook.php';
require MODPATH.'facebook-php-sdk/src/facebook.config.php';


/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Three20_Controller extends Template_Controller {

  const ALLOW_PRODUCTION = FALSE;

  // Set the name of the template to use
  public $template = 'templates/basic';
  public $auto_render = FALSE;

  public function __construct() {
    parent::__construct();

    $this->session = Session::instance();

    $this->template->js_foot_files = array();
    $this->template->js_head_files = array();
    $this->template->js_head_scripts = array();
    $this->template->css_files = array();
    $this->template->title = array('Three20');

    $this->facebook = new Facebook(array(
      'appId'  => FACEBOOK_APP_ID,
      'secret' => FACEBOOK_SECRET,
      'cookie' => true,
    ));

    $this->fbsession = $this->facebook->getSession();

    $me = null;
    $uid = null;
    $this->profile = null;
    // Session based API call.
    if ($this->fbsession) {
      try {
        $uid = $this->facebook->getUser();
      } catch (FacebookApiException $e) {
        error_log($e);
      }
    }

    // login or logout url will be needed depending on current user state.
    if ($uid) {
      $this->logoutUrl = $this->facebook->getLogoutUrl();

      $db = Database::instance();

      $result = $db->
        from('fbaccounts')->
        select(array('fbid', 'userid'))->
        where('fbid', $uid)->
        limit(1)->
        get();

      $userId = null;

      $this->profile = array();

      if (count($result)) {
        foreach ($result as $row) {
          $userrel = $row;
          break;
        }
        $userId = $userrel->userid;

        $result = $db->
          from('accounts')->
          select(array('name', 'first_name', 'last_name'))->
          where('id', $userId)->
          limit(1)->
          get();

        if (count($result)) {
          foreach ($result as $row) {
            $userInfo = $row;
            break;
          }

          $this->profile['name'] = $userInfo->name;
          $this->profile['first_name'] = $userInfo->first_name;
          $this->profile['last_name'] = $userInfo->last_name;
          $this->profile['userid'] = $userId;
        }

      } else {  
        $me = $this->facebook->api('/me');

        $dataToStore = array(
          'name' => $me['name'],
          'first_name' => $me['first_name'],
          'last_name' => $me['last_name'],
        );
        $this->profile = $dataToStore;
        $userInfo = $db->insert('accounts', $dataToStore);
        $userId = $userInfo->insert_id();
        $this->profile['userid'] = $userId;

        $dataToStore = array(
          'fbid' => $uid,
          'userid' => $userId,
        );
        $userInfo = $db->insert('fbaccounts', $dataToStore);
      }

      $this->profile['fbid'] = $uid;
      unset($uid);

    } else {
      $loginUrl = $this->facebook->getLoginUrl();
    }
  }

  protected function select_repo_info($db) {
    return $db->
      from('repos')->
      select(array(
        'repoid',
        'username',
        'reponame',
        'description',
        'homepage',
        'watchers',
        'last_updated'
      ));
  }

  /**
   * Fetch the repo information from the database, if it exists.
   *
   * @return null if no repo with this info exists in the db
   */
  protected function get_db_repo_info($db, $username, $reponame) {
    $result = $this->select_repo_info($db)->
      where('username', $username)->
      where('reponame', $reponame)->
      limit(1)->
      get();

    $repo = null;

    if (count($result)) {
      // TODO: Is there a simpler way to do this?
      $repodbobj = null;
      foreach ($result as $row) {
        $repodbobj = $row;
        break;
      }

      // TODO: Is there a simpler, equivalently specific way to do this?
      $repo = array(
        'repoid'        => $repodbobj->repoid,
        'username'      => $repodbobj->username,
        'reponame'      => $repodbobj->reponame,
        'description'   => $repodbobj->description,
        'homepage'      => $repodbobj->homepage,
        'watchers'      => $repodbobj->watchers,
        'last_updated'  => $repodbobj->last_updated
      );
    }

    return $repo;
  }

  protected function add_js_foot_file($file) {
    $this->template->js_foot_files []= $file;
  }

  protected function add_js_head_file($file) {
    $this->template->js_head_files []= $file;
  }

  protected function add_js_head_script($script) {
    $this->template->js_head_scripts []= $script;
  }

  protected function add_css_file($file) {
    $this->template->css_files []= $file;
  }

  protected function prepend_title($text) {
    array_unshift($this->template->title, $text);
  }

  protected function render_markdown_template($content) {
    require Kohana::find_file('vendor', 'Markdown');
    $content->title = current($this->template->title)."\n";
    $this->template->templateModifiedTime = filemtime($content->kohana_filename);

    $this->template->content = $content->render(FALSE, 'Markdown');

    $this->template->title = implode(' | ', $this->template->title);
    $this->template->render(TRUE);
  }

  protected function render_article_template($content, $name = null, $date = null) {
    $filename = $content->kohana_filename;
    $configFilename = substr($filename, 0, strrpos($filename, '.')).'.config';
    
    $config = array();
    if (file_exists($configFilename)) {
      $config = json_decode(file_get_contents($configFilename), TRUE);
    }
    
    if (isset($config['css'])) {
      $files = explode(' ', $config['css']);
      foreach ($files as $file) {
        $this->add_css_file('css/'.$file.'.css');
      }
    }
    
    if (isset($config['js'])) {
      $files = explode(' ', $config['js']);
      foreach ($files as $file) {
        $this->add_js_head_file('js/'.$file.'.js');
      }
    }

    if (isset($config['layout'])) {
      $this->template->set_filename('templates/'.$config['layout']);
    }

    if (isset($config['title'])) {
      $name = $config['title'];
    }

    if (isset($config['date'])) {
      $date = $config['date'];
    }

    if (isset($this->logoutUrl)) {
      $this->template->logoutUrl = $this->logoutUrl;
      $content->logoutUrl = $this->logoutUrl;
    }
    $this->template->fbsession = $this->fbsession;
    $this->template->facebook = $this->facebook;
    $this->template->profile = $this->profile;
    $content->title = current($this->template->title)."\n";
    $content->fbsession = $this->fbsession;
    $content->facebook = $this->facebook;
    $content->profile = $this->profile;
    $this->template->templateModifiedTime = filemtime($content->kohana_filename);

    $this->template->content = $content->render(FALSE);

    if ($date) {
      array_unshift($this->template->title, $date);
    }
    if ($name) {
      array_unshift($this->template->title, $name);
    }

    $this->template->title = implode(' | ', $this->template->title);
    $this->template->render(TRUE);
  }

}