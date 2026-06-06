<?php

use CodeIgniter\Router\RouteCollection;
/*
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);*/
/**
 * @var RouteCollection $routes
 */

$routes->get('/login', 'Home::login');
$routes->post('/valid-user-check', 'Home::checkValidUser');
$routes->get('/logout', 'Home::logout');
$routes->get('/', 'Home::dashboard');

$routes->get('/employee-management', 'Employee::employeeManagement');

$routes->get('/add-employee', 'Employee::addEmployee');
$routes->get('getDistricts/(:num)', 'Employee::getDistricts/$1');
$routes->get('getPoliceStation/(:num)', 'Employee::getPoliceStation/$1');


$routes->post('/insert-employee', 'Employee::insertEmployee');
$routes->get('/edit-employee/(:num)', 'Employee::editEmployee/$1');
$routes->post('/update-employee/(:num)', 'Employee::updateEmployee/$1');
$routes->get('/delete-employee/(:num)', 'Employee::deleteEmployee/$1');
$routes->get('/check-employee', 'Employee::checkEmployee');
//$routes->get('/employee-list', 'Employee::employeeList');
$routes->get('/medical-details', 'Employee::medicalDetails');

$routes->get('/search-employee', 'Employee::searchEmployee');
$routes->get('/reports', 'Employee::reports');
