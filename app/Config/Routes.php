<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/halamanMember','Home::index');

//services routes
$routes->get('/service/hairStyling', 'ServiceController::hairStyling');
$routes->get('/service/hairColoring', 'ServiceController::hairColoring');
$routes->get('/service/spa', 'ServiceController::spa');
$routes->get('/service/facial', 'ServiceController::facial');
$routes->get('/service/manipedi', 'ServiceController::manipedi');
$routes->get('/service/makeup', 'ServiceController::makeup');
$routes->get('/service/nailart', 'ServiceController::nailart');
$routes->get('/service/waxing', 'ServiceController::waxing');
$routes->post('massDeleteService', 'ServiceController::massDelete');
// CRUD Service Routes
$routes->get('/service','ServiceController::index');
$routes->get('/addService', 'ServiceController::addService');
$routes->post('/prosesAddService', 'ServiceController::prosesAddService');
$routes->get('/editService/(:segment)','ServiceController::editService/$1');
$routes->post('/prosesEditService/(:num)','ServiceController::prosesEditService/$1');
$routes->get('/deleteService/(:num)', 'ServiceController::deleteService/$1');

//auth routes
$routes->get('/login', 'AuthController::login');
$routes->post('/proses_login', 'AuthController::prosesLogin');
$routes->get('/logout', 'AuthController::logout');

//type routes
$routes->get('/type', 'TypeController::index');
$routes->get('/addType', 'TypeController::addType');
$routes->post('/prosesAddType', 'TypeController::prosesAddType');
$routes->get('/editType/(:segment)','TypeController::editType/$1');
$routes->post('/prosesEditType/(:num)','TypeController::prosesEditType/$1');
$routes->get('/deleteType/(:num)', 'TypeController::deleteType/$1');
$routes->post('massDeleteType', 'TypeController::massDelete');

//employee routes
$routes->get('/employee', 'EmployeeController::index');
$routes->get('/addEmployee', 'EmployeeController::addEmployee');
$routes->post('/prosesAddEmployee', 'EmployeeController::prosesAddEmployee');
$routes->get('/editEmployee/(:segment)','EmployeeController::editEmployee/$1');
$routes->post('/prosesEditEmployee/(:num)','EmployeeController::prosesEditEmployee/$1');
$routes->get('/deleteEmployee/(:num)', 'EmployeeController::deleteEmployee/$1');
$routes->post('massDeleteEmployee', 'EmployeeController::massDelete');

//products routes
$routes->get('/product', 'ProductController::index');
$routes->get('/addProduct', 'ProductController::addProduct');
$routes->post('/prosesAddProduct', 'ProductController::prosesAddProduct');
$routes->get('/editProduct/(:segment)','ProductController::editProduct/$1');
$routes->post('/prosesEditProduct/(:num)','ProductController::prosesEditProduct/$1');
$routes->get('/deleteProduct/(:num)', 'ProductController::deleteProduct/$1');
$routes->post('massDeleteProduct', 'ProductController::massDelete');

//member routes
$routes->get('/member', 'MemberController::index');
$routes->get('/addMember', 'MemberController::addMember');
$routes->post('/prosesAddMember', 'MemberController::prosesAddMember');
$routes->get('/editMember/(:segment)','MemberController::editMember/$1');
$routes->post('/prosesEditMember/(:num)','MemberController::prosesEditMember/$1');
$routes->get('/deleteMember/(:num)', 'MemberController::deleteMember/$1');
$routes->post('massDeleteMember', 'MemberController::massDelete');

//dashboard routes
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/author','DashboardController::author');

// reservation routes 
$routes->get('/reservation', 'ReservationController::index');
$routes->get('/reservationAdmin', 'ReservationController::admin');

$routes->group('reservation', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('getServices/(:num)', 'ReservationController::getServices/$1');
    $routes->get('getServiceDetails/(:num)', 'ReservationController::getServiceDetails/$1');
});
$routes->post('/prosesAddReservation', 'ReservationController::prosesAddReservation');

// transaction routes
$routes->get('/transaction', 'TransactionController::index');


// Routes PDF 
$routes->get('/reservationPDF', 'PDFController::reservationPDF');
$routes->get('/transactionPDF', 'PDFController::transactionPDF');