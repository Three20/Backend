<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Extensions_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;

  public function index() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $db = Database::instance();

    $extensionsresult = $db->
      from('extensions')->
      select(array('username', 'reponame', 'extensions.repoid', 'description',
        'homepage'))->
      join('fbaccounts', 'fbaccounts.userid', 'extensions.userid')->
      join('repos', 'repos.repoid', 'extensions.repoid')->
      groupby('extensions.repoid')->
      orderby('reponame', 'ASC')->
      limit(10)->
      get();

    $extensions = array();
    foreach ($extensionsresult as $row) {
      $extensions []= $row;
    }

    $content = new View('pages/extensions');
    $content->extensions = $extensions;

    $this->render_article_template($content);
  }

  public function submit() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }
    
    $content = new View('pages/submitextension');
    
    if ($this->session->get('error_message')) {
      $content->error_message = $this->session->get('error_message');
    }

    $this->render_article_template($content);
  }

  public function create() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    if (!isset($this->profile)) {
      url::redirect('extensions', 301);
    }

    $db = Database::instance();

    $username = $this->input->post('username');
    $reponame = $this->input->post('reponame');
    $tagname = $this->input->post('tagname');
    
    if (!$username || !$reponame || !$tagname) {
      $this->session->set_flash('error_message', 'Missing fields from the form.');
      url::redirect('extensions/submit', 301);
    }

    $result = $db->
      from('repos')->
      select(array('repoid'))->
      where('username', $username)->
      where('reponame', $reponame)->
      limit(1)->
      get();

    if (!count($result)) {
      $this->session->set_flash('error_message', 'The repository "'.$reponame.'" wasn\'t created correctly on our end.');
      url::redirect('extensions/submit', 301);
    }

    foreach ($result as $row) {
      $repodbobj = $row;
      break;
    }
    
    $repoid = $repodbobj->repoid;

    $result = $db->
      from('tags')->
      select(array('tagsha1'))->
      where('repoid', $repoid)->
      where('tagname', $tagname)->
      limit(1)->
      get();

    if (!count($result)) {
      $this->session->set_flash('error_message', 'The tag name "'.$tagname.'" doesn\'t exist.');
      url::redirect('extensions/submit', 301);
    }
    
    foreach ($result as $row) {
      $tagdbobj = $row;
      break;
    }
    
    $tagsha1 = $tagdbobj->tagsha1;

    $result = $db->
      from('extensions')->
      select(array('extensionid'))->
      where('repoid', $repoid)->
      where('tagname', $tagname)->
      limit(1)->
      get();

    if (count($result)) {
      url::redirect('extension/'.$reponame, 301);
    }

    // Get README information about this extension.
    $url = 'http://github.com/api/v2/json/tree/show/'.$username.'/'.$reponame.'/'.$tagsha1;
    $treedata = $this->fetch_data_from_url($url, GITHUB_DATA_FETCH_REFRESH);

    if (!$treedata) {
      $this->session->set_flash('error_message', 'Unable to get the tree data for the given tag.');
      url::redirect('extensions/submit', 301);
    }
    
    $treeobj = json_decode($treedata, TRUE);
    
    $readmeleaf = null;
    
    foreach ($treeobj['tree'] as $leaf) {
      if (preg_match('/^README/i', $leaf['name'])) {
        $readmeleaf = $leaf;
        break;
      }
    }
    
    $readmedata = null;
    
    if ($readmeleaf) {
      $url = 'http://github.com/api/v2/json/blob/show/'.$username.'/'.$reponame.'/'.$readmeleaf['sha'];
      $readmedata = $this->fetch_data_from_url($url, GITHUB_DATA_FETCH_REFRESH);
    }

    // Insert the extension now.
    $extensiondbobj = array(
      'userid'  => $this->profile['userid'],
      'repoid'  => $repoid,
      'tagname' => $tagname,
      'readme'  => $readmedata,
      'date_submitted' => date("Y-m-d H:i:s")
    );
    $extensiondbinfo = $db->insert('extensions', $extensiondbobj);

    url::redirect('extension/'.$reponame, 301);
  }

}