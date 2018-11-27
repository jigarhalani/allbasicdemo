<?php
/**
 * Created by PhpStorm.
 * User: jigar
 * Date: 16/10/2018
 * Time: 11:51
 */

$routes = [
    ''        => 'controller/index.php',
    'about'   => 'controller/about.php',
    'contact' => 'controller/contact.php',
];

$router->register($routes);
