<?php

array_shift($argv);

$mode = null;

foreach ($argv as $arg) {
  $username = $arg;
  if (ereg(' ', $username)) {
    $gravatar = '';
    $name = $username;
    $github = '';

  } else {
    $userinfo = json_decode(file_get_contents('http://github.com/api/v2/json/user/show/'.$username), TRUE);
    $gravatar = $userinfo['user']['gravatar_id'];
    $name = $userinfo['user']['name'];
    $github = '<div class="github"><a href="http://github.com/'.$username.'">'.$username.'</a></div>';
  }

  echo '
<div class="profile">
  <img width="135px" height="135px" src="http://www.gravatar.com/avatar/'.$gravatar.'?s=135&amp;d=http://three20.info/gfx/team/silhouette.gif" />
  <div class="name">'.$name.'</div>
  '.$github.'
</div>
';
}
