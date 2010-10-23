<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Module_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;
  
  public $template = 'templates/article';

  public function show($name) {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('modules/'.$name);
    
    $filename = $content->kohana_filename;
    $configFilename = substr($filename, 0, strrpos($filename, '.')).'.config';
    
    $config = array();
    if (file_exists($configFilename)) {
      $config = json_decode(file_get_contents($configFilename), TRUE);
    }

    $this->template->article_dir = '_modules';
    $this->template->article_id = $name.'.'.$config['ext'];

    $this->add_css_file('css/article.css');

    $this->render_article_template($content);
  }

}