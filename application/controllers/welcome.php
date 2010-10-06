<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Welcome_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;

  public function index() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('pages/home');

    $this->add_css_file('css/home.css');

    $this->render_markdown_template($content);
  }

} // End Welcome Controller