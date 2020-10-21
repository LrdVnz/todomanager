<?php 

$tasks = $app['database']->selectAll();

require './views/index.view.php'; 