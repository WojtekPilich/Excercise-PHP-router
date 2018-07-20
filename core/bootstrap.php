<?php

$app =[];

$app['config'] = require $_SERVER['DOCUMENT_ROOT'] . '/Routing/config.php';
//$app['config'] = require '../config.php';

require $_SERVER['DOCUMENT_ROOT'] . '/Routing/core/Router.php';
//require 'Router.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Routing/core/Request.php';
//require 'Request.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Routing/core/database/Connection.php';
//require 'database/Connection.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Routing/core/database/QueryBuilder.php';
//require 'database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);

