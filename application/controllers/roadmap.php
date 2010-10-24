<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Roadmap_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;

  public function index() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('pages/roadmap');

    $this->render_article_template($content);
  }

  public function show($version) {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('pages/'.$version);
    
    $this->render_article_template($content);
  }

}