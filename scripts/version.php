<?php

array_shift($argv);

$mode = null;

foreach ($argv as $arg) {
  $filename = $arg.'issues.json';
  if (file_exists($filename)) {
    parse_file($filename, $mode);
  } else {
    $mode = $arg;
  }
}

function parse_file($filename, $mode) {
  $issues = json_decode(file_get_contents($filename), TRUE);
  
  if (!$mode || $mode == 'count') {
    echo count($issues['issues']);
    
  } else if ($mode == 'grid') {
    echo '<div class="grid" id="issues">'."\n";
    foreach (array_reverse($issues['issues']) as $issue) {
      echo '  <div class="row">'."\n";
      echo '  <a class="col-4" href="http://github.com/'.$issue['user'].'">';
      echo '<img width="72" height="72" align="center" src="http://www.gravatar.com/avatar/'.$issue['gravatar_id'].'?s=72&amp;d=http://new.three20.info/gfx/team/silhouette.gif" />';
      echo '</a>'."\n";
      echo '  <a class="col-4-fill-3" href="http://github.com/facebook/three20/issues/issue/'.$issue['number'].'"><div class="info">';
      echo '<div class="title">'.$issue['title'].'</div>';
      echo '<div class="date">'.$issue['created_at'].'</div>';
      echo '</div></a>'."\n";
      echo '  <div class="clearfix"></div>'."\n";
      echo '  </div> <!-- .row -->'."\n";
    }
    echo '</div> <!-- .grid -->'."\n";
  }
}
