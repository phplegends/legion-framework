<?php

return [
    
    'debug'    => true,
    
    'base_url' => '',

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