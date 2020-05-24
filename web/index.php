<?php

include __DIR__ . '/../boot.php';

use PHPLegends\View;
use Legion\Http\Request;
use PHPLegends\Http\Session;
use Legion\Routing\Dispatcher;
use Legion\Http\ResponseFactory;
use PHPLegends\Routes\UrlGenerator;

// View definitions


if (empty($config['debug'])) {
    error_reporting(0);
} else {
    error_reporting(1);
    ini_set('display_errors', 'On');
}

$request = Request::createFromGlobals();

$view = new View\Factory(
    new View\Finder(['php' => null, 'phtml' => null], $config['view']['path'])
);

$view->getData()->define('URL', new UrlGenerator($router, $config['base_url']));

if (isset($config['session']['handler'])) 
{
    $request->setSession(new Session($config['session']['handler']));
}

$response_factory = new ResponseFactory($view);


if (isset($config['error_handler'])) {

    set_exception_handler(function ($exception) use($config, $request, $response_factory) {

        $instance = new $config['error_handler'];

        $result = $instance($exception, $request, $response_factory, $config);

        if ($result === null) {
            throw $exception;
        } elseif ($result instanceof \PHPLegends\Http\Response) {
            $result->send();
        }

    });
}

$dispatcher = new Dispatcher($request, $response_factory);

if (isset($config['fallback_controller'])) {
    $dispatcher->setDefaultController($config['fallback_controller']);
}

$router->dispatch($dispatcher);
