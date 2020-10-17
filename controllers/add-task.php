<?php 

$descr = htmlspecialchars($_POST["task"]) ; 

$app['database']->intoDB($descr);

require('views/add-task.view.php');
