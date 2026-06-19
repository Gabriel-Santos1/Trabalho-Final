<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Rotas publicas
$routes->get('/', 'Home::index');
$routes->get('/login', 'Client::login');
$routes->post('/authenticate', 'Client::authenticate');
