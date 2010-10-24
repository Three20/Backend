<?php defined('SYSPATH') OR die('No direct access allowed.');

$config['_default'] = 'home';
$config['article/([a-zA-Z0-9\-]+)'] = 'article/show/$1';
$config['showcase/([a-zA-Z0-9\-]+)'] = 'home/showcase/$1';
$config['module/([a-zA-Z0-9\-]+)'] = 'module/show/$1';
$config['roadmap/([a-zA-Z0-9\.\-]+)'] = 'roadmap/show/$1';
$config['(overview)'] = 'home/redirect/$1';
$config['(setup|core|ui|timeline)/(.+)'] = 'home/redirect/$1_$2';
