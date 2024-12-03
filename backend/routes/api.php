<?php

namespace App\Routes;

use App\Core\Router;

$router = new Router();

// Auth routes
$router->post('/api/auth/login', 'AuthController@login');
$router->post('/api/auth/register', 'AuthController@register');

// Employee routes
$router->get('/api/employees', 'EmployeeController@index');
$router->get('/api/employees/{id}', 'EmployeeController@show');
$router->post('/api/employees', 'EmployeeController@store');
$router->put('/api/employees/{id}', 'EmployeeController@update');
$router->delete('/api/employees/{id}', 'EmployeeController@delete');

// Shift routes
$router->get('/api/shifts', 'ShiftController@index');
$router->get('/api/shifts/{id}', 'ShiftController@show');
$router->post('/api/shifts', 'ShiftController@store');
$router->put('/api/shifts/{id}', 'ShiftController@update');
$router->delete('/api/shifts/{id}', 'ShiftController@delete');

return $router;