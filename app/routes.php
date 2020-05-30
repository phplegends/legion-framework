<?php

// Closure route example

$router->get('/', function ($request, $response) {
    return $response->view('hello', ['framework' => 'Legion Framework']);
});

$router->group([
    'namespace' => 'App\\Controllers', 
    'middlewares' => [
        \App\Middlewares\TrimString::class
    ]
], function ($router) {
    
    $router->resource('ResourceController', 'resource');

});
