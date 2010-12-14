<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Extension_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;

  public function show($reponame) {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $db = Database::instance();

    $result = $this->select_repo_info($db)->
      where('reponame', $reponame)->
      get();

    if (!count($result)) {
      url::redirect('extensions', 301);
    }

    $repos = array();
    foreach ($result as $row) {
      $extensionsresult = $db->
        from('extensions')->
        select(array('fbid', 'name', 'tagname', 'downloads', 'readme', 'date_submitted'))->
        join('fbaccounts', 'fbaccounts.userid', 'extensions.userid')->
        join('accounts', 'accounts.id', 'extensions.userid')->
        where('repoid', $row->repoid)->
        get();

      $row->tags = array();
      foreach ($extensionsresult as $tagrow) {
        $tagrow->date_submitted = date('l, \t\h\e jS \of F, Y', strtotime($tagrow->date_submitted));
        $row->tags []= $tagrow;
      }
      
      $repos []= $row;
    }

    $content = new View('pages/extension');
    $content->repos = $repos;

    $this->render_article_template($content);
  }

}