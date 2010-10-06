<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Article_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;
  
  public $template = 'templates/article';

  public function show($name) {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('articles/'.$name);
    
    $article_name = null;
    $article_date = null;

    if (preg_match('/([0-9]{4})-([0-9]{2})-([0-9]{2})-([a-z0-9\-]+)/i', $name, $matches)) {
      $article_name = str_replace('-', ' ', $matches[4]);
      $article_date = date('F n, Y', mktime(0, 0, 0, $matches[2], $matches[3], $matches[1]));
    }

    $filename = $content->kohana_filename;
    $configFilename = substr($filename, 0, strrpos($filename, '.')).'.config';
    
    $config = array();
    if (file_exists($configFilename)) {
      $config = json_decode(file_get_contents($configFilename), TRUE);
    }

    $this->template->article_id = $name.'.'.$config['ext'];

    $this->add_css_file('css/article.css');

    $this->render_article_template($content, $article_name, $article_date);
  }

}