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


$route['staff_delete_cinema/(:num)'] = 'staff/delete_cinema/$1';
$route['staff_edit_cinema/(:num)'] = 'staff/edit_cinema/$1';
$route['staff_delete_gener/(:num)'] = 'staff/delete_gener/$1';
$route['staff_edit_gener/(:num)'] = 'staff/edit_gener/$1';
$route['staff_delete_rating/(:num)'] = 'staff/delete_rating/$1';
$route['staff_edit_rating/(:num)'] = 'staff/edit_rating/$1';
$route['staff_update_rating'] = 'staff/update_rating';
$route['staff_update_gener'] = 'staff/update_gener';
$route['staff_update_cinema'] = 'staff/update_cinema';
$route['staff_add_rating'] = 'staff/add_rating';
$route['staff_add_gener'] = 'staff/add_gener';
$route['staff_add_cinema'] = 'staff/add_cinema';
$route['staff_geners'] = 'staff/geners';
$route['staff_Ratings'] = 'staff/Ratings';
$route['staff_cinemas'] = 'staff/cinemas';


//admin routes

$route['admin_delete_cinema/(:num)'] = 'admin/delete_cinema/$1';
$route['admin_edit_cinema/(:num)'] = 'admin/edit_cinema/$1';
$route['admin_delete_user/(:num)'] = 'admin/delete_user/$1';
$route['admin_edit_user/(:num)'] = 'admin/edit_user/$1';
$route['admin_delete_gener/(:num)'] = 'admin/delete_gener/$1';
$route['admin_delete_gener/(:num)'] = 'admin/delete_gener/$1';
$route['admin_edit_gener/(:num)'] = 'admin/edit_gener/$1';
$route['admin_update_showtime/(:num)'] = 'admin/update_showtime/$1';
$route['admin_update_movie/(:num)'] = 'admin/update_movie/$1';
$route['admin_update_customer/(:num)'] = 'admin/update_customer/$1';
$route['admin_delete_customer/(:num)'] = 'admin/delete_customer/$1';
$route['admin_edit_customer/(:num)'] = 'admin/edit_customer/$1';
$route['admin_edit_movie/(:num)'] = 'admin/edit_movie/$1';
$route['admin_delete_movie/(:num)'] = 'admin/delete_movie/$1';
$route['admin_edit_customer/(:num)'] = 'admin/edit_customer/$1';
$route['admin_edit_showtime/(:num)'] = 'admin/edit_showtime/$1';
$route['admin_delete_showtime/(:num)'] = 'admin/delete_showtime/$1';

$route['monthly_showtime_pdfdetails'] = 'admin/monthly_showtime_pdfdetails';
$route['weekly_showtime_pdfdetails'] = 'admin/weekly_showtime_pdfdetails';
$route['daily_showtime_pdfdetails'] = 'admin/daily_showtime_pdfdetails';
$route['monthly_revenu_pdfdetails'] = 'admin/monthly_revenu_pdfdetails';
$route['weekly_revenu_pdfdetails'] = 'admin/weekly_revenu_pdfdetails';


$route['movie_report'] = 'admin/movie_report';
$route['revenu_report'] = 'admin/revenu_report';
$route['showtime_report'] = 'admin/showtime_report';
$route['cinema_revenu'] = 'admin/cinema_revenu';
$route['movie_revenu'] = 'admin/movie_revenu';
$route['box_office'] = 'admin/box_office';
$route['weekly_revenu'] = 'admin/weekly_revenu';
$route['monthly_revenu'] = 'admin/monthly_revenu';
$route['fetch_box_office_pdfdetails'] = 'admin/fetch_box_office_pdfdetails';
$route['showtime_pdfdetails'] = 'admin/showtime_pdfdetails';
$route['update_user'] = 'admin/update_user';
$route['update_rating'] = 'admin/update_rating';
$route['update_gener'] = 'admin/update_gener';
$route['update_cinema'] = 'admin/update_cinema';
$route['add_showtime'] = 'admin/add_showtime';
$route['add_rating'] = 'admin/add_rating';
$route['add_gener'] = 'admin/add_gener';
$route['add_cinema'] = 'admin/add_cinema';
$route['register'] = 'admin/register';
$route['add_movie'] = 'admin/add_movie';
$route['add_customer'] = 'admin/add_customer';
$route['admin_reports'] = 'admin/reports';
$route['admin_bookings'] = 'admin/bookings';
$route['admin_customer'] = 'admin/customer';
$route['admin_users'] = 'admin/users';
$route['admin_geners'] = 'admin/geners';
$route['admin_Ratings'] = 'admin/Ratings';
$route['admin_cinemas'] = 'admin/cinemas';
$route['admin_movies'] = 'admin/movies';
$route['admin_showtime'] = 'admin/showtime';
$route['admin_dashboard'] = 'admin/index';

//admin login routes
$route['authenticate_login'] = 'login/authenticate_login';
$route['logout'] = 'login/logout';
//staff route
$route['staff_edit_showtime/(:num)'] = 'staff/edit_showtime/$1';
$route['staff_delete_showtime/(:num)'] = 'staff/delete_showtime/$1';
$route['staff_delete_movie/(:num)'] = 'staff/delete_movie/$1';
$route['staff_edit_movie/(:num)'] = 'staff/edit_movie/$1';
$route['staff_update_showtime/(:num)'] = 'staff/update_showtime/$1';
$route['staff_update_movie/(:num)'] = 'staff/update_movie/$1';
$route['staff_update_customer/(:num)'] = 'staff/update_customer/$1';
$route['staff_delete_customer/(:num)'] = 'staff/delete_customer/$1';
$route['staff_edit_customer/(:num)'] = 'staff/edit_customer/$1';

$route['staff_add_showtime'] = 'staff/add_showtime';
$route['staff_addSeat'] = 'staff/addSeat';
$route['staff_add_customer'] = 'staff/add_customer';
$route['staff_add_customer'] = 'staff/add_customer';
$route['staff_add_customer'] = 'staff/add_customer';
$route['staff_add_customer'] = 'staff/add_customer';
$route['staff_add_movie'] = 'staff/add_movie';
$route['staff_add_customer'] = 'staff/add_customer';
$route['staff_dashboard'] = 'staff';
$route['staff_showtime'] = 'staff/showtime';
$route['staff_movies'] = 'staff/movies';
$route['staff_Customer'] = 'staff/customer';
$route['staff_seat'] = 'staff/seat';
$route['staff_advert'] = 'staff/advert';
$route['staff_profile'] = 'staff/staff_profile';
$route['update_staf_profile'] = 'staff/update_staf_profile';
$route['change_staff_pass'] = 'staff/change_staff_pass';




//customer login routes
$route['change_password'] = 'login/change_password';
$route['customer_logout'] = 'login/customer_logout';
$route['customer_signup'] = 'login/customer_signup';
$route['customer_signin'] = 'login/customer_signin';

//public page routes
$route['payment/(:num)'] = 'publicpages/payment/$1';
$route['movie_details/(:num)'] = 'publicpages/movie_details/$1';
$route['movie_ticket_plan/(:num)'] = 'publicpages/movie_ticket_plan/$1';
$route['create_comment/(:num)'] = 'publicpages/create_comment/$1';
$route['movie_seat_plan/(:num)'] = 'publicpages/movie_seat_plan/$1';
$route['movie_checkout/(:num)'] = 'publicpages/movie_checkout/$1';


//$route['change_password'] = 'publicpages/change_password';
$route['movie_book/(:num)'] = 'publicpages/movie_book/$1';
$route['home'] = 'publicpages';
$route['movie'] = 'publicpages/movie';
$route['about'] = 'publicpages/about';
$route['contact'] = 'publicpages/contact';
$route['subscribe'] = 'publicpages/email_subscription';


$route['user_booking'] = 'profile/user_booking';
$route['user_dashboard'] = 'profile/index';
$route['user_profile'] = 'profile/user_profile';
//$route['delete_profile'] = 'profile/delete_profile';
$route['update_profile'] = 'profile/update_profile';
$route['get_active_ticket'] = 'profile/get_active_ticket';
$route['cancel_ticket/(:num)'] = 'profile/cancel_ticket/$1';



$route['default_controller'] = 'publicpages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
