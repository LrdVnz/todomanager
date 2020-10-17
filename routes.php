<?php
$router->get('', 'controllers/index.php');

$router->post('tasks', 'controllers/add-task.php');

$router->post('deleteTasks', 'controllers/delete-task.php') ; 

$router->post('modifyTasks', 'controllers/modify-task.php') ;

$router->post('completeTasks', 'controllers/complete-task.php');

