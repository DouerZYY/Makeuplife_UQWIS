<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts/index'] = 'posts/index';
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/search'] = 'posts/search';
$route['posts/savelikes/(:any)'] = 'posts/savelikes/$1';
$route['users/profile'] = 'users/profile';
// $route['posts/email'] = 'posts/email';
// $route['posts/(:any)/(:any)'] = "posts/$1/$2";
$route['posts/(any:)/(any:)'] = function ($slug = NULL, $created_at = NULL) {
	return 'posts/' . $slug . '/' . $created_at;
};
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';

$route['default_controller'] = 'pages/view';

$route['users/view_login/(:any)'] = 'users/view_login/$1';

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/posts/(:any)'] = 'categories/posts/$1';
$route['comments/create/(:any)'] = 'comments/create/$1';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
