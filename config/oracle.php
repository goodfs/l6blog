<?php

return [
    'oracle' => [
        'driver'         => 'oracle',
        // 'tns'            => env('DB_TNS', '175.6.20.97:41521/orcl'),
        'host'           => env('DB_HOST_ORACLE', '175.6.20.97'),
        'port'           => env('DB_PORT_ORACLE', '41521'),
        'database'       => env('DB_DATABASE_ORACLE', 'orcl'),
        'username'       => env('DB_USERNAME_ORACLE', 'TestCJK'),
        'password'       => env('DB_PASSWORD_ORACLE', 'TestCJK'),
        'charset'        => env('DB_CHARSET', 'AL32UTF8'),
        'prefix'         => env('DB_PREFIX', ''),
        'prefix_schema'  => env('DB_SCHEMA_PREFIX', ''),
         'edition'        => env('DB_EDITION', 'ora$base'),
        'server_version' => env('DB_SERVER_VERSION', '11g'),
    ],
];
