<?php

define('API_DIR', '../../api/');
define('API_SEARCH_DIR', API_DIR.'search/');

function read_dir($dir) {
  $filenames = array();
  $directory = opendir($dir);

  while ($filename = readdir($directory)) {
    if ($filename[0] != '.') {
      $filenames[] = $filename;
    }
  }

  closedir($directory);

  return $filenames;
}

$searchFilenames = read_dir(API_SEARCH_DIR);

// Now that we have all of the search index files, let's split them apart by index type.
$indexFilenames = array();
foreach ($searchFilenames as $filename) {
  $info = pathinfo($filename);
  if ($info['extension'] == 'html' ) {
    $underscorePosition = strpos($filename, '_');
    if ($underscorePosition !== FALSE) {
      $index = substr($filename, 0, $underscorePosition);
      if (empty($indexFilenames[$index])) {
        $indexFilenames[$index] = array();
      }
      $indexFilenames[$index] []= $filename;
    }
  }
}

$indices = array();
$active_index = null;
$in_scope_field = false;

function contents($parser, $data) {
  global $indices;
  global $active_index;
  global $in_scope_field;
  
  if ($in_scope_field) {
    if ($active_index == 'classes') {
      $indices[$active_index]['names'] []= $data;
      $in_scope_field = false;

    } else {
      $indices[$active_index]['names'] []= $data;
      $in_scope_field = false;
    }
  }
}

function startTag($parser, $name, $attribs) {
  global $indices;
  global $active_index;
  global $in_scope_field;

  if ($active_index == 'classes') {
    if (isset($attribs['CLASS']) && $attribs['CLASS'] == 'SRSymbol') {
      if (substr($attribs['HREF'], 0, 3) != 'jav') {
        $indices[$active_index]['links'] []= $attribs['HREF'];
        $in_scope_field = true;
      }
    }

  } else {
    if (isset($attribs['CLASS']) && $attribs['CLASS'] == 'SRSymbol') {
      if (substr($attribs['HREF'], 0, 3) != 'jav') {
        $indices[$active_index]['links'] []= $attribs['HREF'];
      }
    }

    if (isset($attribs['CLASS']) && $attribs['CLASS'] == 'SRScope' &&
        (!isset($attribs['ONKEYDOWN']) || strpos($attribs['ONKEYDOWN'], 'NavChild') === FALSE)) {
      $in_scope_field = true;
    } else {
      $in_scope_field = false;
    }
  }
}

function endTag($parser, $name) {
  $in_scope_field = false;
}

foreach ($indexFilenames as $index => $filenames) {
  $indices[$index] = array(
    'links' => array(),
    'names' => array()
  );
  $active_index = $index;

  foreach ($filenames as $filename) {
    $data = file_get_contents(API_SEARCH_DIR.$filename);

    $xml_parser = xml_parser_create();
    xml_set_element_handler($xml_parser, "startTag", "endTag");
    xml_set_character_data_handler($xml_parser, "contents");

    if (!(xml_parse($xml_parser, $data, TRUE))) {
      //echo $filename."\n";
      //echo xml_error_string(xml_get_error_code($xml_parser))."\n";
      //echo "Error on line ".xml_get_current_line_number($xml_parser)."\n";
    }

    xml_parser_free($xml_parser);
  }
}

$class_lookup = array();
for ($ix = 0; $ix < count($indices['classes']['names']); ++$ix) {
  $link = $indices['classes']['links'][$ix];
  $link = substr($link, 3);
  $class_lookup[$indices['classes']['names'][$ix]] = $link;
}

echo '$ttTags = array(\n';
$map = array();
foreach ($class_lookup as $name => $link) {
  $map []= "  '".$name."'";
}
echo implode(",\n", $map)."\n";
echo ");\n";

