<?php

return [
    
    'debug'    => true,
    
    'base_url' => '',


    'error_handler' => \App\Errors\Handler::class,

    /*
     * Controller class used in Closure contexts 
     * */

    'fallback_controller' => \App\Controllers\Controller::class,

    // Session config section

    'session' => [
        'handler' => new \PHPLegends\Session\Handlers\NativeSessionHandler(),
    ],

    // View config section

    'view' => [
        // Define the path that views will are storage
        'path' => RESOURCE_PATH . '/views'
    ]

];