<?php

return [
    'app_name' => 'XBackBone',
    'base_url' => 'https://__DOMAIN____PATH__',
    'storage' => [
        'driver' => 'local',
        'path'   => './storage',
    ],
    'db'       => [
        'connection' => 'sqlite',
        'dsn'        => 'resources/database/xbackbone.db',
        'username'   => null,
        'password'   => null,
    ]
];
