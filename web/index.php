<?php

include __DIR__ . '/../boot.php';

use PHPLegends\View;
use Legion\Http\Request;
use PHPLegends\Http\Session;
use Legion\Routing\Dispatcher;
use Legion\Http\ResponseFactory;
use PHPLegends\Routes\UrlGenerator;

// View definitions

$view = new View\Factory(
    new View\Finder(['php' => null, 'phtml' => null], $config['view']['path'])
);

$view->getData()->define('URL', new UrlGenerator($router, $config['base_url']));

$request = Request::createFromGlobals();

if (isset($config['session']['handler'])) 
{
    $request->setSession(new Session($config['session']['handler']));
}

empty($config['debug']) && error_reporting(0);

$router->dispatch(new Dispatcher(
    $request,
    new ResponseFactory($view)
));