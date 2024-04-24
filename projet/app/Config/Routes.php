<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('login', 'LoginController::login'); // Route pour la page de connexion
$routes->get('/testdatabase', 'TestDatabase::test');
$routes->get('/signup', 'SignupController::signup');
$routes->post('/signup/processSignup', 'SignupController::processSignup');
$routes->post('/login/processlogin', 'LoginController::processlogin');
$routes->get('/', 'HotelReservation::index');
$routes->get('/reservation', 'Reservation::index');
$routes->post('/reservation/traiterReservation', 'Reservation::traiterReservation');
$routes->get('logout', 'LogoutController::index');









