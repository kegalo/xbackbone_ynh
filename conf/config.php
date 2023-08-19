<?php

return [
    'base_url' => 'https://__DOMAIN____PATH__', // no trailing slash
    'storage' => [
        'driver' => 'local',
        'path'   => '__INSTALL_DIR__/storage',
    ],
    'db'       => [
        'connection' => 'sqlite',
        'dsn'        => '__INSTALL_DIR__/resources/database/xbackbone.db',
        'username'   => null,
        'password'   => null,
    ]
];
