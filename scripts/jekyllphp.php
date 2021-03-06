<?php

date_default_timezone_set('EST');

$nodirs = false;
$force = false;
$cssonly = false;
$jsonly = false;

foreach ($argv as $arg) {
  if ($arg == 'force') {
    $force = true;
  }
  if ($arg == 'nodirs') {
    $nodirs = true;
  }
  if ($arg == 'css') {
    $cssonly = true;
  }
  if ($arg == 'js') {
    $jsonly = true;
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
define('MODULES_PATH', '../application/views/modules');
define('LAYOUTS_PATH', '../application/views/templates');
define('SUBLAYOUTS_PATH', '../application/views/sublayouts');
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
$globalindex = array();
$globalindexregex = '';

function join_paths($path1, $path2) {
  return join('/', array(trim($path1, '/'), trim($path2, '/')));
}

function get_id_config($id) {
  $configFilename = $id.'.config';

  $possible_paths = array(
    ARTICLES_PATH,
    SUBLAYOUTS_PATH,
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
  global $globalindex;
  global $globalindexregex;

  $filename = substr($path, strrpos($path, '/') + 1);
  $compiledFilename = substr($filename, 0, strrpos($filename, '.')).'.php';
  $articlePath = join_paths($pagePath, $compiledFilename);
  
  if (file_exists($articlePath)) {
    $fileData = file_get_contents($articlePath);
    
    $changed = false;
    
    if (preg_match_all('/{{(.+?)}}/i', $fileData, $matches)) {
      foreach ($matches[1] as $match) {
        $config = get_id_config($match);
        
        if (isset($config['published']) && !$config['published']) {
          $fileData = str_replace('{{'.$match.'}}', '', $fileData);

        } else {
          $fileData = str_replace('{{'.$match.'}}',
            '<a href="'.$config['base_path'].$match.'">'.$config['title'].'</a>', $fileData);
        }

        $changed = true;
      }
    }
    
    if (preg_match_all('/>>(.+?)<</i', $fileData, $matches)) {
      foreach ($matches[1] as $match) {
        $args = array();
        $sublayoutName = $match;

        // We allow the use of >>name(arg0, arg1, ...)<< to reuse sublayouts.
        // Within the sublayout, $$args[n]$$ will be replaced by the corresponding argument
        // passed into the layout.
        if (preg_match('/\((.+?)\)/i', $match, $argumentMatches)) {
          $dirtyargs = explode(',', $argumentMatches[1]);
          $args = array();
          $is_string = false;
          foreach ($dirtyargs as $arg) {
            $did_add = false;
            if ($is_string) {
              $args[count($args) - 1] .= ','.rtrim($arg, '"');
              $did_add = true;
            }
            $arg = ltrim($arg);
            if ($arg) {
              if ($arg[0] == '"') {
                $is_string = true;
                $arg = ltrim($arg, '"');
              }
              if ($arg[strlen($arg)-1] == '"') {
                $is_string = false;
              }
            }
            
            if (!$did_add) {
              $args []= $arg;
            }
          }
          
          $sublayoutName = preg_replace('/\(.+?\)/i', '', $match);
        }

        $testPath = join_paths(SUBLAYOUTS_PATH, $sublayoutName.'.php');

        if (!file_exists($testPath)) {
          $fileData = str_replace('>>'.$match.'<<', '', $fileData);
          $changed = true;
          continue;
        }

        $config = get_id_config($sublayoutName);

        if (isset($config['published']) && !$config['published']) {
          // If this article isn't published, remove the link from the output.
          $fileData = str_replace('>>'.$match.'<<', '', $fileData);

        } else {
          $contents = file_get_contents($testPath);
          
          // If there are any arguments used to invoke this sublayout, search the sublayout
          // for any places where it uses arguments and replace them accordingly.
          if (count($args) > 0) {
            if (preg_match_all('/\$\$args\[([0-9]+)\]\$\$/i', $contents, $argMatches)) {
              foreach ($argMatches[1] as $argMatch) {
                $index = intval($argMatch);
                if ($index >= 0 && $index < count($args)) {
                  $contents = str_replace('$$args['.$argMatch.']$$',
                                          $args[intval($argMatch)], $contents);
                  
                } else {
                  $contents = str_replace('$$args['.$argMatch.']$$', '', $contents);
                }
              }
            }
          }
          $fileData = str_replace('>>'.$match.'<<', $contents, $fileData);
        }

        $changed = true;
      }
    }

    if (preg_match_all($globalindexregex, $fileData, $matches)) {
      for ($index = 0; $index < count($matches[0]); ++$index) {
        $match = $matches[0][$index];
        $classname = $matches[1][$index];
        if (isset($globalindex[$classname])) {
          $fileData = str_replace($match, '<a href="'.$globalindex[$classname].'">'.$classname.'</a>', $fileData);
        }

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

  $config = array();
  if (preg_match('/^^---(.+?)---/is', $filedata, $match)) {
    $config = Spyc::YAMLLoadString($match[1]);
    
    $filedata = trim(preg_replace('/^^---(.+?)---/is', '', $filedata));
  }

  if (preg_match_all('/`([a-zA-Z0-9]*Three20[a-zA-Z0-9]+)\/([a-zA-Z0-9]+)\.(h|m)`/', $filedata, $matches)) {
    for ($index = 0; $index < count($matches[0]); ++$index) {
      $library = $matches[1][$index];
      $classname = $matches[2][$index];
      $filetype = $matches[3][$index];
      
      if ($filetype == 'h') {
        $subdir = 'Headers';

      } else if ($filetype == 'm') {
        $subdir = 'Sources';
      }
      
      $url = 'http://github.com/facebook/three20/blob/master/src/'
        .$library.'/'.$subdir.'/'.$classname.'.'.$filetype;

      $filedata = preg_replace('/`'.$library.'\/'.$classname.'\.'.$filetype.'`/', '<a href="'.$url.'">'.$classname.'</a>', $filedata);
    }
  }

  $config['ext'] = $ext;
  if (preg_match('/^mdown|markdown$/i', $ext)) {
    $compiledData = Markdown($filedata);

  } else if (preg_match('/^textile$/i', $ext)) {
    $textile = new Textile();
    $compiledData = $textile->TextileThis($filedata);

  } else if (preg_match('/^html|htm$/i', $ext)) {
    $compiledData = $filedata;
    
  } else {
    $compiledData = null;
    unset($config['ext']);
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

function update_module($path) {
  update_content($path, MODULES_PATH);
}

function update_layout($path) {
  update_content($path, LAYOUTS_PATH);
}

function update_sublayout($path) {
  update_content($path, SUBLAYOUTS_PATH);
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
  global $cssonly;
  global $jsonly;
  if (is_dir($path)) {
    $filename = substr($path, strrpos($path, '/') + 1);
    if ($filename[0] != '_' && $filename[0] != '.' && (!$cssonly && !$jsonly
        || $cssonly && $filename == 'css'
        || $jsonly && $filename == 'js')) {
      echo 'copying: '.$filename.'...'."\n";
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
          process_directory($subpath, $fn, $recurse);

        } else {
          $fn($subpath);
        }
      }
    }
    closedir($dhandle);
  }
}

function load_index() {
  $index = array();
  if (file_exists('index.json')) {
    $index = json_decode(file_get_contents('index.json'), TRUE);
  }
  return $index;
}

function length_sort($a,$b){
    return strlen($b)-strlen($a);
}

function get_index_regex($index) {
  $ids = array_keys($index);
  return '/\^('.join('|', $ids).')\^/i';
}

$globalindex = load_index();
$globalindexregex = get_index_regex($globalindex);

for ($globalphase = 0; $globalphase < 2; ++$globalphase) {
  echo "Phase ".($globalphase+1)."...\n";

  echo "posts...\n";
  process_directory('../Articles/_posts', 'update_article', $recurse = false);

  echo "modules...\n";
  process_directory('../Articles/_modules', 'update_module', $recurse = false);

  echo "sublayouts...\n";
  process_directory('../Articles/_sublayouts', 'update_sublayout', $recurse = false);

  echo "layouts...\n";
  process_directory('../Articles/_layouts', 'update_layout', $recurse = false);

  echo "pages...\n";
  process_directory('../Articles/_pages', 'update_page', $recurse = false);
}

if (!$nodirs) {
  process_directory('../Articles/', 'copy_folders', $recurse = false);
}
