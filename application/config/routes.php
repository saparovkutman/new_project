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
$route['default_controller'] = 'main/index';
/*===============MAIN AUTHIT ROUTES===================*/
$route['login'] = '/authalluser/login';
$route['signup'] = '/authalluser/signup';
$route['logout'] = '/authalluser/logout';
/*===============End MAIN AUTHIT ROUTES===================*/

/*===============MAIN ROUTES===================*/
$route['package'] = '/main/subcategory_one';

$route['service'] = '/main/subcategory_two';
$route['service/(:num)'] = '/main/subcategory_two_view/$1';
$route['package/reserve/(:num)'] = '/main/reserve_form_package_subcattwo/$1';
$route['restaurant/reserve/(:num)'] = '/main/reserve_form_restaurant_subcattwo/$1';
$route['tichet/reserve'] = '/main/reserve_form_tichet_subcattwo';

$route['vip_club'] = '/main/subcategory_three';
$route['vip_club/reserve'] = '/main/reserve_form_subcattree';


/*===============ADMIN AUTHIT ROUTES===================*/
$route['admin/login'] = '/admin/auth/login';
$route['admin/signup'] = '/admin/auth/signup';
$route['admin/logout'] = '/admin/auth/logout';
/*===============End ADMIN AUTHIT ROUTES===================*/

/*===============ADMIN ROUTES===================*/
$route['admin'] = '/admin/main/index';
$route['admin/reserve'] = '/admin/main/reserve';
$route['admin/reserve_vip'] = '/admin/main/reserve_vip';
$route['admin/reserve_kitchen'] = '/admin/main/reserve_kitchen';
$route['admin/reserve_show'] = '/admin/main/reserve_show';
$route['admin/reserve_search_car'] = '/admin/main/reserve_search_car';
$route['admin/reserve_chip'] = '/admin/main/reserve_chip';

$route['admin/catalogs_one'] = '/admin/main/catalogs_one';
$route['admin/catalogs_two'] = '/admin/main/catalogs_two';
$route['admin/catalogs_three'] = '/admin/main/catalogs_three';
$route['admin/podcatalogs/(:num)'] = '/admin/main/podcatalogs/$1';

/*===============Sub category one ROUTES===================*/
$route['admin/subcategory/(:num)'] = '/admin/RequestSubCatOne/show_sub_catalogs_one/$1';
$route['admin/subcategory_insert'] = '/admin/RequestSubCatOne/insert_sub_cat_one';
$route['admin/subcategory_update'] = '/admin/RequestSubCatOne/update_sub_cat_one';
$route['admin/subcategory_delete'] = '/admin/RequestSubCatOne/delete_sub_cat_one';
/*===============End Sub category one ROUTES===================*/
$route['admin/users'] = '/admin/main/users';
$route['admin/profile'] = '/admin/main/profile';

//category_one
$route['admin/request_one'] = 'admin/catalogs_one';
$route['admin/insert_one'] = 'models/requestCatOneModels';
$route['admin/update_one/(:any)'] = 'models/requestCatOneModels/$1';

//category_two
$route['admin/request_two'] = 'admin/catalogs_two';
$route['admin/insert_two'] = 'models/requestCatTwoModels';
$route['admin/update_two/(:any)'] = 'models/requestCatTwoModels/$1';

$route['admin/uslugi/(:num)'] = 'admin/podcatalog_two/uslugi/$1';

$route['admin/services_vip/(:num)'] = 'admin/podcatalog_two/show_services_vip/$1';
$route['admin/vip_add'] = 'admin/podcatalog_two/add_book';
$route['admin/vip_upd'] = 'admin/podcatalog_two/update_book';
$route['admin/vip_del'] = 'admin/podcatalog_two/delete_book';

$route['admin/rest_add'] = 'admin/podcatalog_two/add_restaurants';
$route['admin/rest_del'] = 'admin/podcatalog_two/delete_res';
$route['admin/rest_upd'] = 'admin/podcatalog_two/update_restaurants';
$route['admin/restaurant/(:num)'] = 'admin/podcatalog_two/show_services_restaurant/$1';

$route['admin/show/(:num)'] = 'admin/podcatalog_two/get_show/$1';
$route['admin/add_show'] = 'admin/podcatalog_two/add_show';
$route['admin/show_upd'] = 'admin/podcatalog_two/update_show';
$route['admin/show_del'] = 'admin/podcatalog_two/delete_show';

$route['admin/vip_view/(:num)'] = 'admin/podcatalog_two/get_serv_vip_view/$1';
$route['admin/insert_view'] = 'admin/podcatalog_two/insert_vip';
$route['admin/upd_view'] = 'admin/podcatalog_two/update_vip';
$route['admin/del_view'] = 'admin/podcatalog_two/delete_vip';

$route['admin/rest_view/(:num)'] = 'admin/podcatalog_two/get_serv_rest_view/$1';
$route['admin/rest_add_view'] = 'admin/podcatalog_two/insert_res';
$route['admin/rest_edit_view'] = 'admin/podcatalog_two/update_rest';
$route['admin/rest_del_view'] = 'admin/podcatalog_two/delete_rest';

$route['admin/rest_show/(:num)'] = 'admin/podcatalog_two/get_serv_show_view/$1';
$route['admin/show_insert_view'] = 'admin/podcatalog_two/insert_show_view';
$route['admin/show_upd_view'] = 'admin/podcatalog_two/update_show_view';
$route['admin/show_del_view'] = 'admin/podcatalog_two/delete_show_view';


//category_three
$route['admin/request_three'] = 'admin/catalogs_three';
$route['admin/insert_three'] = 'models/requestCatThreeModels';
$route['admin/update_three/(:any)'] = 'models/requestCatThreeModels/$1';
//subcategories three
$route['admin/podcatalog_three/(:num)'] = '/admin/main/podcatalog_three/$1';

//accommodation_package
$route['admin/accommodation'] = 'admin/main/accommodation';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

