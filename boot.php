<?php

require_once __DIR__ . '/vendor/autoload.php';

use Legion\Routing\Router;

const BASE_PATH     = __DIR__;
const APP_PATH      = BASE_PATH . '/app';
const RESOURCE_PATH = BASE_PATH . '/resources';
const WEB_PATH      = BASE_PATH . '/web';

$config = include_once BASE_PATH . '/config.php';

$router = new Router;

call_user_func(function () use ($router) {
    include_once APP_PATH . '/routes.php';
});
