<?php 

$task = htmlspecialchars($_POST["complete"]);

$app['database']->completeTask($task);

require('views/complete-task.view.php');
