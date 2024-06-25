<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::loginform_view');
$routes->get('loginform_view', 'Home::loginform_view');
$routes->get('index', 'Admin::index');
$routes->get('bookingstaff', 'Admin::bookingstaff');
$routes->get('cottages', 'Admin::cottages');
$routes->get('rooms', 'Admin::rooms');
$routes->get('bookings', 'Admin::bookings');
$routes->get('loginform', 'Home::loginform');
$routes->get('conf', 'Home::conf');
$routes->get('register_form', 'Home::register_form');
$routes->get('user', 'Home::user');
$routes->get('no', 'Admin::no');
$routes->get('yes', 'Admin::yes');
$routes->get('indexs', 'Home::indexs');
$routes->get('function', 'Admin::function');
$routes->get('fumction', 'Admin::fumction');
$routes->get('logout', 'Home::logout');
$routes->get('verify', 'Home::verify');
$routes->get('config', 'Home::config');
$routes->get('editcott', 'Home::editcott');
$routes->get('loginform_view', 'Home::loginform_view');


$routes->get('user_rooms', 'User::user_rooms');
$routes->get('products', 'ProductController::rooms');
$routes->get('product-add', 'ProductController::create');
$routes->get('product-store', 'ProductController::store');

$routes->get('carousel', 'User::carousel');
$routes->get('userbooking', 'User::userbooking');
$routes->get('userfpage', 'User::userfpage');
$routes->get('delete_guest', 'Admin::delete_guest');

$routes->post('loginform', 'Home::loginform');
$routes->post('register_form', 'Home::register_form');
$routes->post('index', 'Admin::index');
$routes->post('yes', 'Admin::yes');
$routes->post('no', 'Admin::no');
$routes->post('rooms', 'Admin::rooms');
$routes->post('cottages', 'Admin::cottages');
$routes->post('bookings', 'Admin::bookings');
$routes->post('delete_guest', 'Admin::delete_guest');


$routes->get('login', 'Login::index');

$routes->post('loginform_view', 'Home::loginform_view');
$routes->post('register_form', 'Home::register_form');
$routes->post('index', 'Admin::index');

$routes->get('login', 'Login::index');
$routes->post('login/process_login', 'Login::process_login');
$routes->get('carousel', 'User::carousel');
$routes->get('userbooking', 'User::userbooking');
$routes->get('userfpage', 'User::userfpage');
$routes->get('booking', 'BookingController::index');
$routes->post('booking/saveBooking', 'BookingController::saveBooking');
$routes->post('admin/add_data', 'Add::add_data');
$routes->post('admin/add_room', 'AddRom::add_room');
$routes->get('rooms', 'RoomController::rooms');



 