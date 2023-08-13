<?php

return [
    'base_url' => 'https://__DOMAIN____PATH__', // no trailing slash
    'db'       => [
        'connection' => 'sqlite',
        'dsn'        => '__INSTALL_DIR__/resources/database/xbackbone.db',
        'username'   => null,
        'password'   => null,
    ],
    'storage' => [
        'driver' => 'local',
        'path'   => '__INSTALL_DIR__/storage',
    ],
];
