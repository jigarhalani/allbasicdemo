<?php
/**
 * Created by PhpStorm.
 * User: jigar
 * Date: 15/10/2018
 * Time: 14:34
 */


return [
    'database' => [
        'connection' => 'mysql:host=127.0.0.1;',
        'name'       => 'homestead',
        'username'   => 'homestead',
        'password'   => 'secret',
        'options'    => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ],
    ],
];