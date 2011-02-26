<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Gallery_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;

  public function index() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('pages/gallery');

    $this->render_article_template($content);
  }

  public function submit() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('pages/gallerysubmit');

    $this->render_article_template($content);
  }

  public function getcode() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('pages/gallerycode');

    $content->appname = trim($this->input->post('appname'));
    $content->companyname = trim($this->input->post('companyname'));
    $content->website = trim($this->input->post('website'));
    $content->itunesurl = trim($this->input->post('itunesurl'));
    $content->description = trim($this->input->post('description'));
    $content->websiteclean = str_replace('http://', '', str_replace('www.', '', $content->appname));
    $content->appid = str_replace(' ', '_', strtolower($content->appname));

    $this->render_article_template($content);
  }
}