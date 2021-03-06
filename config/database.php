<?php

return [

    'connections' => [

        /**
         * This is where you configure your database.
         * Typically you should only have to configure the host, database, username and password values.
         * FusionInvoice is designed and tested using MySQL only. Other database types may or may not work.
         */
        //moved to .env
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => env('DB_STRICT', false),
            'engine' => null,
            //'charset'   => 'utf8',
            //'collation' => 'utf8_unicode_ci',

        ],

    ],

    /**
     * Ignore the options below here.
     */

    'default' => env('DB_CONNECTION', 'mysql'),

    'fetch' => PDO::FETCH_CLASS,

    'migrations' => 'migrations',

];