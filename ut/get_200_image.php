<?php

header("HTTP/1.1 200 OK");
header("Content-Type: image/png");

echo file_get_contents('gfx/Icon.png');