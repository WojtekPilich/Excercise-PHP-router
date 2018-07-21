<?php

$tasks = $app['database']->selectAll('todos');

require $_SERVER['DOCUMENT_ROOT'] . '/Laracasts/Routing/views/index.view.php';
