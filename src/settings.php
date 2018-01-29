<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
            'cache_path' => __DIR__ . '/../templates/cache/',
            'auto_reload' => TRUE // set to false in production
        ],

        // Monolog settings
        'logger' => [
            'name' => 'nutrivity',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        
        // Database settings
        'db' => [
            'host' => 'localhost',
            'dbname' => 'nutrivity',
            'user' => 'root',
            'pass' => 'Welcome123'
        ]
    ],
];
