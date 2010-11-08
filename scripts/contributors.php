<?php

// Grab the list of contributors from Facebook and output the HTML for the
// team page.

$output = null;
exec("cd ~/workbench/ios/three20;git log --format='%aN' | sort -u", $output);

$map = array(
  "Alexander Saltanov" => 'sashka',
  "Amit Snyderman" => 'amitsnyderman',
  "Ben Gertzfield" => '',
  "Bogdan Yakovenko" => '',
  "Brandon Walkin" => 'bwalkin',
  "Brian Chapados" => 'chapados',
  "Cemal Eker" => 'cemaleker',
  "Chih-Wei Lee" => 'dlackty',
  "Dan Morrow" => 'skydivedan',
  "Dima Berastau" => 'dima',
  "Doug Barth" => 'dougbarth',
  "Eelco Lempsink" => 'eelco',
  "Emil Palm" => 'mrevilme',
  "Greg Haines" => 'gresrun',
  "Holtwick" => 'holtwick',
  "Hwee-Boon Yar" => 'hboon',
  "Jason Ting" => 'jzting',
  "Jeff Verkoeyen" => 'jverkoey',
  "Joachim Bengtsson" => 'nevyn',
  "Joe Hewitt" => 'joehewitt',
  "John Ellis" => 'johne',
  "Matt Crocker" => '',
  "NanoTech" => 'nanotech',
  "Owen Yamauchi" => 'oyamauchi',
  "Paulo Oliveira" => 'seqoy',
  "Pavel Repin" => 'paxan',
  "Peter" => 'null',
  "Peter Steinberger" => 'steipete',
  "Petr Reichl" => 'meap',
  "Rodrigo Mazzilli" => 'rodmaz',
  "Shaheen Gandhi" => '',
  "Skotch Vail" => 'skotchvail',
  "Stephan Diederich" => 'diederich',
  "Tobias Rundström" => 'tru',
  "Wiley Kestner" => 'prairiedogg',
  "beng" => '',
  "drewmca" => 'drewmca',
  "joehewitt" => 'joehewitt',
  "jverkoey" => 'jverkoey',
  "uprise78" => 'uprise78',
  "wbailey" => 'wbailey',
);

foreach ($output as $fullname) {
  $username = $map[$fullname];
  if ($username) {
    $url = 'http://github.com/api/v2/json/user/show/'.$username;
    $c = json_decode(file_get_contents($url), TRUE);
    $c = $c['user'];
  } else {
    $c = array(
      'name' => $fullname,
      'login' => null,
      'gravatar_id' => ''
    );
  }

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