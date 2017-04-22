<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Auth Routing
$route['login'] = 'auth/login'; // view login page
$route['register'] = 'auth/login'; // view login page
$route['logout'] = 'auth/logout'; // view login page
$route['login/facebook'] = 'auth/facebook';
$route['login/twitter'] = 'auth/twitter';

// Profile Routing
$route['me'] = 'user/me';

// Search Module
$route['search/(:any)'] = 'article/search/$1';

// Article Routing
//$route['article/(:any)'] = 'article/view/$1';
//$route['article'] = 'article';

// Game Module
$route['game'] = 'game';
$route['game/(:any)'] = 'game/detail/$1';
$route['game/(:any)/play'] = 'game/play/$1';

// Score Module
$route['score'] = 'score';
$route['score/(:any)'] = 'score/detail/$1';
$route['score/(:any)/update'] = 'score/update/$1';

// Admin Module
$route['admin'] = 'admin';
$route['admin/article'] = '';
$route['admin/article/new'] =  '';
$route['admin/article/(:any)'] =  '';
$route['admin/article/(:any)/update'] =  '';
$route['admin/article/(:any)/delete'] =  '';
$route['admin/category'] =  '';
$route['admin/category/new'] =  '';
$route['admin/category/(:any)'] =  '';
$route['admin/category/(:any)/update'] =  '';
$route['admin/category/(:any)/delete'] =  '';
$route['admin/tag'] =  '';
$route['admin/tag/new'] =  '';
$route['admin/tag/(:any)'] =  '';
$route['admin/tag/(:any)/update'] =  '';
$route['admin/tag/(:any)/delete'] =  '';
$route['admin/comment'] =  '';
$route['admin/game'] = '';
$route['admin/game/score'] = '';
$route['admin/game/new'] = '';
$route['admin/game/(:any)'] = '';
$route['admin/game/(:any)/update'] = '';
$route['admin/game/(:any)/delete'] = '';
$route['admin/user'] = '';
$route['admin/user/role'] = '';
$route['admin/user/new'] = '';
$route['admin/user/(:any)'] = '';
$route['admin/user/(:any)/update'] = '';
$route['admin/user/(:any)/delete'] = '';
$route['admin/ranking'] = '';



// Category Module
$route['category/(:any)'] = '';
// Tag Module
$route['tag/(:any)'] = '';

// Gallery Module
$route['gallery'] = '';
$route['gallery/(:any)'] = '';

// $route['(:any)'] = '';