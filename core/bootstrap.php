<?php

$app =[];

$app['config'] = require $_SERVER['DOCUMENT_ROOT'] . '/Laracasts/Routing/config.php';
//$app['config'] = require '../config.php';

require $_SERVER['DOCUMENT_ROOT'] . '/Laracasts/Routing/core/Router.php';
//require 'Router.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Laracasts/Routing/core/Request.php';
//require 'Request.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Laracasts/Routing/core/database/Connection.php';
//require 'database/Connection.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Laracasts/Routing/core/database/QueryBuilder.php';
//require 'database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);

