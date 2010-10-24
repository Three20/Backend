<?php

// Grab the list of contributors from Facebook and output the HTML for the
// team page.

$result = json_decode(file_get_contents('http://github.com/api/v2/json/repos/show/facebook/three20/contributors'), TRUE);

foreach ($result['contributors'] as $c) {
  $name = $c['name'];
  $login = $c['login'];
  $gravatar = $c['gravatar_id'];
  if (!$name) {
    $name = $login;
  }

  echo <<<HTML

<div class="profile">
  <img width="212px" height="212px" src="http://www.gravatar.com/avatar/$gravatar?s=212&amp;d=http://three20.info/gfx/team/silhouette.gif" />
  <div class="name">$name</div>
  <div class="github"><a href="http://github.com/$login">$login</a></div>
</div>

HTML;
}