<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'BlogController::index');
$routes->get('search', 'SearchController::index');
$routes->get('about', 'BlogController::about');
$routes->add('contact', 'ContactController::index');

// Add weather routes
$routes->get('weather', 'WeatherController::index');
$routes->match(['get', 'post'], 'weather/search', 'WeatherController::search');
$routes->get('weather/(:any)', 'WeatherController::search');
$routes->get('weather/(:any)/(:any)', 'WeatherController::search');

$routes->group('admin', static function($routes){

    $routes->group('', ['filter'=>'cifilter:auth'],[], static function($routes){
        // $routes->view('example-page','example-page'); 
        $routes->get('home','AdminController::index', ['as'=> 'admin.home']);
        $routes->get('logout','AdminController::logoutHandler', ['as'=> 'admin.logout']);
        $routes->get('profile','AdminController::profile', ['as'=> 'admin.profile']);
        $routes->post('update-personal-details','AdminController::updatePersonalDetails', ['as'=> 'update-personal-details']);
    });
    $routes->group('',['filter'=>'cifilter:guest'], static function($routes){
       // $routes->view('example-auth','example-auth');
        $routes->get('login','AuthController::loginform', ['as'=> 'admin.login.form']);
        $routes->post('login','AuthController::loginHandler', ['as'=> 'admin.login.handler']);
        $routes->post('forgot-password','AuthController::forgotform', ['as'=> 'admin.forgot.form']);
        $routes->get('forgot-password','AuthController::forgotform', ['as'=> 'admin.forgot.form']);
        $routes->post('send-password-reset-link','AuthController::SendPasswordResetLink', ['as'=> 'send_password_reset_link']);
        $routes->get('password/reset/(:any)','AuthController::resetPassword/$1', ['as'=> 'admin.reset-password']);
        $routes->post('password/update', 'AuthController::updatePassword', ['as' => 'admin.update-password']);
    });

});