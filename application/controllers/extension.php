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

    $result = $db->
      from('repos')->
      select(array('repoid'))->
      where('reponame', $reponame)->
      get();

    if (!count($result)) {
      url::redirect('extensions', 301);
    }

    $content = new View('pages/extension');

    $this->render_article_template($content);
  }

}