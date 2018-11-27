<?php
/**
 * Created by PhpStorm.
 * User: jigar
 * Date: 16/10/2018
 * Time: 11:37
 */

$tasks=$query->selectAll('todos');
require 'views/index.view.php';