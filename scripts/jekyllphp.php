<?php

include '../system/vendor/Markdown.php';
include '../system/vendor/classTextile.php';
include '../system/vendor/spyc.php';

define('ARTICLES_PATH', '../application/views/articles');
define('LAYOUTS_PATH', '../application/views/templates');
define('PAGES_PATH', '../application/views/pages');
define('WWW_PATH', '../www');

if (0) {
  exec('cd ../Articles;git pull', $output);

  if ($output[0] == 'Already up-to-date.') {
    // Do nothing then.
    exit;
  }
}

function join_paths($path1, $path2) {
  return join('/', array(trim($path1, '/'), trim($path2, '/')));
}

function update_content($path, $pagePath) {
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

process_directory('../Articles/_posts', 'update_article', $recurse = false);
process_directory('../Articles/_layouts', 'update_layout', $recurse = false);
process_directory('../Articles/_pages', 'update_page', $recurse = false);

process_directory('../Articles/', 'copy_folders', $recurse = false);
