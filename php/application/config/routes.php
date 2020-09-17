<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'course';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['courses'] = [
  'get' => 'course/index',
  'post' => 'course/store',
];

$route['courses/(\d+)'] = [
  'get' => 'course/index/$1',
  'put' => 'course/update/$1',
  'delete' => 'course/remove/$1',
];
