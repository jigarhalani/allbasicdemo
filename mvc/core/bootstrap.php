<?php
$config = require('config/config.php');
require('helper/function.php');
require('core/db/Connection.php');
require('core/db/QueryBuilder.php');
require('core/Router.php');
require('core/Request.php');

return  new QueryBuilder(
    Connection::make($config['database'])
);