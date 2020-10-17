<?php 

$oldtask = htmlspecialchars($_POST["delete"]) ; 

$app['database']->deleteFromDB($oldtask);

require('views/delete-task.view.php');
