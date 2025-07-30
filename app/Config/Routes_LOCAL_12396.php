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



$routes->get('/working-professionals', 'Home::workingProfessional');
$routes->get('/working-professional-crash', 'Home::workingProfessionalCrash');
$routes->get('/working-professional-unlimited', 'Home::workingProfessionalUnlimited');

$routes->get('/general-communication', 'Home::generalcommunication');
$routes->get('/general-communication-unlimited', 'Home::gcUnlimited');
$routes->get('/generalcommunication-online', 'Home::gcOnline');
$routes->get('/general-communication-crash-course', 'Home::gcCrash');

$routes->get('/exam-preparation', 'Home::examprep');
$routes->get('/exam-preparation-crash-course', 'Home::examprepcrash');
$routes->get('/exam-preparation-unlimited', 'Home::examprepunlimited');

$routes->get('/ielts-preparation', 'Home::ieltsprep');
$routes->get('/ielts-preparation-crash-course', 'Home::ieltsprepCrash');






$routes->get('/india','Home::india');
$routes->get('/international','Home::international');
$routes->match(['get', 'post'], 'securepayment', 'Home::securepayment');
$routes->match(['get', 'post'], 'processorder', 'Home::porder');







/*$routes->get('/home', 'Session::index');
$routes->get('/Session', 'Sessionexample::__construct');
$routes->get('/Sessionset', 'Sessionexample::set_session_data');
$routes->get('/Sessionget', 'Sessionexample::get_session_data');
$routes->get('/Sessiondestory', 'Sessionexample::destroy_session');
$routes->get('/india', 'Session::india');
$routes->get('/international', 'Session::international');
$routes->get('/changeCountry', 'Session::changeCountry');
*/

/*$routes->get('/olympiad', 'Olympiad::index');
$routes->get('/processorder', 'ProcessOrder::porder');
$routes->get('/whatsappupdate', 'Whatsappupdate::update');
$routes->match(['get', 'post'], 'review', 'ProcessOrder::ieltsPreview');
$routes->get('/review', 'ProcessOrder::ieltsPreview');
$routes->get('/testJson', 'ProcessOrder::testJson');
$routes->get('/coachcallfeedback', 'Webhook::coach_call_feedback');
$routes->get('/userfeedback', 'Webhook::userfeedback');
$routes->match(['get', 'post'], 'whatsapp-update', 'Whatsapp_update::update');
$routes->get('/example', 'Example::showProduct');*/
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
