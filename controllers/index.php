<?php

$tasks = $app['database']->selectAll('todos');

require $_SERVER['DOCUMENT_ROOT'] . '/Routing/views/index.view.php';
//require '../views/index.view.php';
