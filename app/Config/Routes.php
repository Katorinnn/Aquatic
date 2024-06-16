<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin::index');
// $routes->get('/Articles', 'Articles::index');
// $routes->get('login', 'Home::login');
$routes->get('bookingstaff', 'Admin::bookingstaff');
$routes->get('cottages', 'Admin::cottages');
$routes->get('rooms', 'Admin::rooms');
$routes->get('bookings', 'Admin::bookings');
// $routes->post(' ', 'Home::index');
$routes->get('loginform', 'Home::loginform');
$routes->get('conf', 'Home::conf');
// $routes->get('dashboard', 'Home::dashboard');
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

$routes->post('loginform', 'Home::loginform');
$routes->post('register_form', 'Home::register_form');
$routes->post('index', 'Admin::index');
$routes->post('yes', 'Admin::yes');
$routes->post('no', 'Admin::no');



 