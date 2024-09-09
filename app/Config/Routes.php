<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');

$routes->add('admin0503/logout', 'admin0503\Login::logout');

$routes->group('admin0503', ['filter' => 'noadmin'], function ($routes) {
    $routes->add('', 'admin0503\Login::login');
    $routes->add('login', 'admin0503\Login::login');
    $routes->add('lupapassword', 'admin0503\Login::lupapassword');
    $routes->add('resetpassword', 'admin0503\Login::resetpassword');
});
