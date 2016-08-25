<?php

// Closure route example

$router->get('/', function ($request, $response) {
    return $response->view('hello', ['framework' => 'Legion Framework']);
});

// Group route example

$router->group(['namespace' => 'App\\Controllers\\'], function ($router) {
    // Controller controller example
    $router->get('/about', 'HomeController::actionAboutGet');
});