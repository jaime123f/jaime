<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Página principal
$routes->get('/', 'Home::index');

// Inicio de sesión
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::validar');

// Panel principal
$routes->get('dashboard', 'Dashboard::index');

// Listar alumnos
$routes->get('alumnos', 'Alumnos::index');

// Mostrar formulario de registro
$routes->get('alumnos/nuevo', 'Alumnos::nuevo');

// Registrar alumno
$routes->post('alumnos/crear', 'Alumnos::crear');

// Mostrar formulario de edición
$routes->get('alumnos/editar/(:num)', 'Alumnos::editar/$1');

// Actualizar alumno
$routes->post('alumnos/actualizar/(:num)', 'Alumnos::actualizar/$1');

// Eliminar alumno
$routes->post('alumnos/eliminar/(:num)', 'Alumnos::eliminar/$1');

// Cerrar sesión
$routes->post('logout', 'Auth::logout');
