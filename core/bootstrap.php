<?php

$app =[];

$app['config'] = require $_SERVER['DOCUMENT_ROOT'] . '/Laracasts/Routing/config.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);

