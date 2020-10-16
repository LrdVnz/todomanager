<?php 
echo "<a href='/'>Home</a>";

$oldtask = htmlspecialchars($_POST["delete"]) ; 

$app['database']->deleteFromDB($oldtask);

echo '<p> Task " ' . $oldtask . ' " deleted</p>' ; 