<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Three20_Controller extends Template_Controller {

  const ALLOW_PRODUCTION = FALSE;

  // Set the name of the template to use
  public $template = 'templates/basic';
  public $auto_render = FALSE;

  public function __construct() {
    parent::__construct();

    $this->session = Session::instance();

    $this->template->js_foot_files = array();
    $this->template->js_head_files = array();
    $this->template->js_head_scripts = array();
    $this->template->css_files = array();
    $this->template->title = array('Three20');
  }

  protected function add_js_foot_file($file) {
    $this->template->js_foot_files []= $file;
  }

  protected function add_js_head_file($file) {
    $this->template->js_head_files []= $file;
  }

  protected function add_js_head_script($script) {
    $this->template->js_head_scripts []= $script;
  }

  protected function add_css_file($file) {
    $this->template->css_files []= $file;
  }

  protected function prepend_title($text) {
    array_unshift($this->template->title, $text);
  }

  protected function render_markdown_template($content) {
    require Kohana::find_file('vendor', 'Markdown');
    $content->title = current($this->template->title)."\n";
    $this->template->templateModifiedTime = filemtime($content->kohana_filename);

    $this->template->content = $content->render(FALSE, 'Markdown');

    $this->template->title = implode(' | ', $this->template->title);
    $this->template->render(TRUE);
  }

  protected function render_article_template($content, $name = null, $date = null) {
    $filename = $content->kohana_filename;
    $configFilename = substr($filename, 0, strrpos($filename, '.')).'.config';
    
    $config = array();
    if (file_exists($configFilename)) {
      $config = json_decode(file_get_contents($configFilename), TRUE);
    }
    
    if (isset($config['css'])) {
      $files = explode(' ', $config['css']);
      foreach ($files as $file) {
        $this->add_css_file('css/'.$file.'.css');
      }
    }
    
    if (isset($config['js'])) {
      $files = explode(' ', $config['js']);
      foreach ($files as $file) {
        $this->add_js_head_file('js/'.$file.'.js');
      }
    }

    if (isset($config['layout'])) {
      $this->template->set_filename('templates/'.$config['layout']);
    }

    if (isset($config['title'])) {
      $name = $config['title'];
    }

    if (isset($config['date'])) {
      $date = $config['date'];
    }

    $content->title = current($this->template->title)."\n";
    $this->template->templateModifiedTime = filemtime($content->kohana_filename);

    $this->template->content = $content->render(FALSE);

    if ($date) {
      array_unshift($this->template->title, $date);
    }
    if ($name) {
      array_unshift($this->template->title, $name);
    }

    $this->template->title = implode(' | ', $this->template->title);
    $this->template->render(TRUE);
  }

}