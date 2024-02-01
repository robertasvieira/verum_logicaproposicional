<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::home');

$routes->post('anotacoes/create', 'Anotacoes::create');

$routes->post('anotacoes/update', 'Anotacoes::update');

$routes->post('anotacoes/delete/(:num)', 'Anotacoes::delete/$1');

$routes->get('/fase1', 'Fases::fase1');

$routes->get('/fase2', 'Fases::fase2');

$routes->get('/fase3', 'Fases::fase3');

$routes->get('/fase4', 'Fases::fase4');

$routes->get('/fase5', 'Fases::fase5');