<?php
$config = require ('config/config.php');
require('helper/function.php');
require('db/Connection.php');
require('db/QueryBuilder.php');
require('Task.php');

return  new QueryBuilder(
    Connection::make($config['database'])
);