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
    
    $content = new View('pages/extensions');

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

    // $this->profile['fbid']

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
      $this->session->set_flash('error_message', 'The repository "'.$reponame.'" doesn\'t exist. This is likely a problem with the backend db.');
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
      $this->session->set_flash('error_message', 'The tag name "'.$tagname.'" doesn\'t exist. This is likely a problem with the backend db.');
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
      url::redirect('extension/'.$reponame.'/'.$repoid, 301);
    }

    // Insert the extension now.
    $extensiondbobj = array(
      'userid' => $this->profile['userid'],
      'repoid' => $repoid,
      'tagname' => $tagname,
    );
    $extensiondbinfo = $db->insert('extensions', $extensiondbobj);

    url::redirect('extension/'.$reponame.'/'.$repoid, 301);
  }

}