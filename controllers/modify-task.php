<?php 

$oldDescr = htmlspecialchars($_POST["oldDescr"]) ; 

$newDescr = htmlspecialchars($_POST["newDescr"]) ; 

$app['database']->modifyFromDB($oldDescr, $newDescr);

require('views/modify-task.view.php');

