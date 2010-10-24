<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Home_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;

  public function index() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('pages/home');

    $this->render_article_template($content);
  }

  public function showcase($id) {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('pages/home');

    $content->showcaseid = $id;

    $this->render_article_template($content);
  }

  public function redirect($to) {
    switch (strtolower($to)) {
      case 'overview':              url::redirect('home', 301);
      case 'contribute':            url::redirect('roadmap', 301);
      case 'setup_existing':        url::redirect('/article/2010-10-06-Adding-Three20-To-Your-Project', 301);
      case 'setup_templates':       url::redirect('/article/2010-10-06-Adding-Three20-To-Your-Project', 301);
      case 'core_debugging':        url::redirect('/article/2010-10-07-Debugging-With-Three20', 301);
      case 'ui_navigation':         url::redirect('/article/2010-10-06-URL-Based-Navigation', 301);
      case 'timeline_roadmap':      url::redirect('roadmap', 301);
    }
  }

}