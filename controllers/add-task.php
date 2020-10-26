<?php 

$descr = htmlspecialchars($_POST["task"]) ; 

$duedate = htmlspecialchars($_POST["date"]) ;  

$app['database']->intoDB($descr, $duedate);

require('views/add-task.view.php');
