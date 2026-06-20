<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Rotas publicas
$routes->get('/', 'Home::index');
$routes->get('/login', 'Cliente::login');
$routes->post('/authenticate', 'Cliente::authenticate');
