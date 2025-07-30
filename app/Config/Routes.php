<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/foryou', 'Home::index');
$routes->get('/index', 'Home::index');


/*$routes->get('/working-professionals', 'ProductDetails::workingProfessional');
*/$routes->get('/working-professional-crash', 'ProductDetails::workingProfessionalCrash');
$routes->get('/working-professional-unlimited', 'ProductDetails::workingProfessionalUnlimited');

/*$routes->get('/general-communication', 'ProductDetails::generalcommunication');
*/$routes->get('/general-communication-unlimited', 'ProductDetails::gcUnlimited');
$routes->get('/general-communication-online', 'ProductDetails::gcOnline');
$routes->get('/general-communication-crash-course', 'ProductDetails::gcCrash');

/*$routes->get('/exam-preparation', 'ProductDetails::examprep');
*/$routes->get('/exam-preparation-crash-course', 'ProductDetails::examprepcrash');
$routes->get('/exam-preparation-unlimited', 'ProductDetails::examprepunlimited');

/*$routes->get('/ielts-preparation', 'ProductDetails::ieltsprep');
*/$routes->get('/ielts-preparation', 'ProductDetails::ieltsprepCrash');







/*$routes->get('/steplearn', 'ProductDetails::generalcommunication');
$routes->get('/stepforcompexams', 'ProductDetails::examprep');
$routes->get('/stepforielts', 'ProductDetails::ieltsprep');
$routes->get('/stepforworkingprofessionals', 'ProductDetails::workingProfessional');*/
// $routes->get('/kids', 'Home::kids');
$routes->get('/kids', 'ProductDetails::kids');
$routes->get('/forcorporate', 'ProductDetails::forcorporate');
$routes->get('/forinstitution', 'ProductDetails::forinstitution');
$routes->get('/stepworks', 'ProductDetails::stepworks');
$routes->get('/stepforcolleges', 'ProductDetails::stepforcolleges');
$routes->get('/stepforschools', 'ProductDetails::forinstitution');

$routes->get('/privacy', 'Home::privacy');
$routes->get('/contactus', 'Home::contactus');
$routes->get('/termsandconditions', 'Home::termsandconditions');

// $routes->get('/generalcommunicationunlimited', 'Home::gcUnlimited');
// $routes->get('/generalcommunicationonline', 'Home::gcOnline');
// $routes->get('/generalcommunicationcrash', 'Home::gcCrash');





//$routes->get('/product', 'Home::productPage');
//$routes->get('/product_page', 'Home::ogproductpage');
//$routes->get('/product_page/(:segment)', 'Home::ogproductpage/$1');


$routes->get('/product/(:segment)', 'Home::product/$1');




$routes->get('/india','Home::india');
$routes->get('/international','Home::international');
$routes->match(['get', 'post'], 'securepayment', 'Home::securepayment');
$routes->match(['get', 'post'], 'initiatepayment', 'Home::securepaymentweb');
$routes->match(['get'], 'processorder', 'Home::porder');
$routes->get('/(:segment)', 'ProductDetails::productTable/$1');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
