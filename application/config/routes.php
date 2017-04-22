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
$route['logout'] = 'user/logout'; // view logout page
$route['auth/logout'] = 'user/logout'; // view logout page
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
$route['admin/profile'] = 'admin';
$route['admin/article'] = 'admin/article';
$route['admin/article/new'] =  'admin/article-new';
$route['admin/article/(:any)'] =  'admin/article_view/$1';
$route['admin/article/(:any)/update'] =  'admin/article_update/$1';
$route['admin/article/(:any)/delete'] =  'admin/article_delete/$1';
$route['admin/category'] =  'admin/category';
$route['admin/category/new'] =  'admin/category_new';
$route['admin/category/(:any)'] =  'admin/category_view/$1';
$route['admin/category/(:any)/update'] =  'admin/category_update/$1';
$route['admin/category/(:any)/delete'] =  'admin/category_delete/$1';
$route['admin/tag'] =  'admin/tag';
$route['admin/tag/new'] =  'admin/tag_new';
$route['admin/tag/(:any)'] =  'admin/tag_view/$1';
$route['admin/tag/(:any)/update'] =  'admin/tag_update/$1';
$route['admin/tag/(:any)/delete'] =  'admin/tag_delete/$1';
$route['admin/comment'] =  'admin/comment';
$route['admin/game'] = 'admin/game';
$route['admin/game/score'] = 'admin/game_score';
$route['admin/game/new'] = 'admin/game_new';
$route['admin/game/(:any)'] = 'admin/game_view/$1';
$route['admin/game/(:any)/update'] = 'admin/game_update/$1';
$route['admin/game/(:any)/delete'] = 'admin/game_delete/$1';
$route['admin/user'] = 'admin/user';
$route['admin/user/role'] = 'admin/role';
$route['admin/user/new'] = 'admin/user_new';
$route['admin/user/(:any)'] = 'admin/user_view/$1';
$route['admin/user/(:any)/update'] = 'admin/user_update/$1';
$route['admin/user/(:any)/delete'] = 'admin/user_delete/$1';
$route['admin/ranking'] = 'admin/ranking';

// Category Module
$route['category/(:any)'] = 'article/category/$1';
// Tag Module
$route['tag/(:any)'] = 'article/tag/$1';

// Gallery Module
$route['gallery'] = 'gallery';
$route['gallery/(:any)'] = 'gallery/view/$1';

// Gallery Module
$route['notifications'] = 'user/notifications';

// Article Module
 $route['(:any)'] = 'article/view/$1';