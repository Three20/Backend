<?php

date_default_timezone_set('EST');

$nodirs = false;
$force = false;

foreach ($argv as $arg) {
  if ($arg == 'force') {
    $force = true;
  }
  if ($arg == 'nodirs') {
    $nodirs = true;
  }
}

if (!$force) {
  if (file_exists('../application/cache/wants_update')) {
    unlink('../application/cache/wants_update');
  } else {
    exit;
  }
}

include '../system/vendor/Markdown.php';
include '../system/vendor/classTextile.php';
include '../system/vendor/spyc.php';

define('ARTICLES_PATH', '../application/views/articles');
define('LAYOUTS_PATH', '../application/views/templates');
define('PAGES_PATH', '../application/views/pages');
define('WWW_PATH', '../www');

if (!$force) {
  exec('cd ../Articles;git pull', $output);

  if ($output[0] == 'Already up-to-date.') {
    // Do nothing then.
    echo date('l jS \of F Y h:i:s A').": Doing nothing.\n";
    exit;
  } else {
    echo date('l jS \of F Y h:i:s A').": Updating the repo...\n";
  }
}

$globalphase = 0;

function join_paths($path1, $path2) {
  return join('/', array(trim($path1, '/'), trim($path2, '/')));
}

function get_id_config($id) {
  $configFilename = $id.'.config';

  $possible_paths = array(
    ARTICLES_PATH,
    LAYOUTS_PATH,
    PAGES_PATH
  );

  $configPath = null;
  foreach ($possible_paths as $path) {
    $testPath = join_paths($path, $configFilename);

    if (file_exists($testPath)) {
      $configPath = $testPath;
    }
  }
  
  $config = array();

  if (preg_match('/([0-9]{4})-([0-9]{2})-([0-9]{2})-([a-z0-9\-]+)/i', $id, $matches)) {
    $config['title'] = str_replace('-', ' ', $matches[4]);
    $config['date'] = date('F n, Y', mktime(0, 0, 0, $matches[2], $matches[3], $matches[1]));
    $config['base_path'] = '/article/';
  } else {
    $config['title'] = $id;
    $config['base_path'] = '/';
  }

  if ($configPath) {
    $config = array_merge($config, json_decode(file_get_contents($configPath), TRUE));
  }

  return $config;
}

function check_cross_links($path, $pagePath) {
  $filename = substr($path, strrpos($path, '/') + 1);
  $compiledFilename = substr($filename, 0, strrpos($filename, '.')).'.php';
  $articlePath = join_paths($pagePath, $compiledFilename);
  
  if (file_exists($articlePath)) {
    $fileData = file_get_contents($articlePath);
    
    $changed = false;
    
    if (preg_match_all('/{{(.+?)}}/i', $fileData, $matches)) {
      foreach ($matches[1] as $match) {
        $config = get_id_config($match);

        $fileData = str_replace('{{'.$match.'}}',
          '<a href="'.$config['base_path'].$match.'">'.$config['title'].'</a>', $fileData);
        $changed = true;
      }
    }
    
    if ($changed) {
      file_put_contents($articlePath, $fileData);
    }
  }
}

function update_content($path, $pagePath) {
  global $globalphase;

  if ($globalphase > 0) {
    check_cross_links($path, $pagePath);
    return;
  }

  $ext = substr($path, strrpos($path, '.') + 1);
  $filename = substr($path, strrpos($path, '/') + 1);
  
  $filedata = trim(file_get_contents($path));

  $config = null;
  if (preg_match('/^^---(.+?)---/is', $filedata, $match)) {
    $config = Spyc::YAMLLoadString($match[1]);
    
    $filedata = trim(preg_replace('/^^---(.+?)---/is', '', $filedata));
  }

  if (preg_match('/^mdown|markdown$/i', $ext)) {
    $compiledData = Markdown($filedata);

  } else if (preg_match('/^textile$/i', $ext)) {
    $textile = new Textile();
    $compiledData = $textile->TextileThis($filedata);

  } else if (preg_match('/^html|htm$/i', $ext)) {
    $compiledData = $filedata;
    
  } else {
    $compiledData = null;
  }

  if ($compiledData) {
    $compiledFilename = substr($filename, 0, strrpos($filename, '.')).'.php';
    $configFilename = substr($filename, 0, strrpos($filename, '.')).'.config';
    
    $articlePath = join_paths($pagePath, $compiledFilename);
    $configPath = join_paths($pagePath, $configFilename);

    if (!$config) {
      @unlink($configPath);
      
    } else {
      file_put_contents($configPath, json_encode($config));
    }

    file_put_contents($articlePath, $compiledData);
  }
}

function update_article($path) {
  update_content($path, ARTICLES_PATH);
}

function update_layout($path) {
  update_content($path, LAYOUTS_PATH);
}

function update_page($path) {
  update_content($path, PAGES_PATH);
}

function rrmdir($path) {
  return is_file($path)?
    @unlink($path):
    array_map('rrmdir',glob($path.'/*'))==@rmdir($path);
}

function recurse_copy($src,$dst) { 
  $dir = opendir($src); 
  if (file_exists($dst)) {
    rrmdir($dst);
  }
  @mkdir($dst); 
  while(false !== ( $file = readdir($dir)) ) { 
    if (( $file != '.' ) && ( $file != '..' )) { 
      if ( is_dir($src . '/' . $file) ) { 
        recurse_copy($src . '/' . $file,$dst . '/' . $file); 
      } else { 
        copy($src . '/' . $file,$dst . '/' . $file); 
      } 
    } 
  } 
  closedir($dir); 
}

function copy_folders($path) {
  if (is_dir($path)) {
    $filename = substr($path, strrpos($path, '/') + 1);
    if ($filename[0] != '_') {
      recurse_copy($path, join_paths(WWW_PATH, $filename));
    }
  }
}

function process_directory($path, $fn, $recurse) {
  $dhandle = opendir($path);
  $files = array();

  if ($dhandle) {
    while (false !== ($fname = readdir($dhandle))) {
      if ($fname != '.' && $fname != '..') {

        $subpath = join_paths($path, $fname);
        if (is_dir($subpath) && $recurse) {
          // Ignore subdirectories for now.
          process_directory($subpath);

        } else {
          $fn($subpath);
        }
      }
    }
    closedir($dhandle);
  }
}

for ($globalphase = 0; $globalphase < 2; ++$globalphase) {
  process_directory('../Articles/_posts', 'update_article', $recurse = false);
  process_directory('../Articles/_layouts', 'update_layout', $recurse = false);
  process_directory('../Articles/_pages', 'update_page', $recurse = false);
}

if (!$nodirs) {
  process_directory('../Articles/', 'copy_folders', $recurse = false);
}
