<?php 
echo "<a href='/'>Home</a>";

$descr = htmlspecialchars($_POST["task"]) ; 

$app['database']->intoDB($descr);

echo '<p> New task created: ' . $descr . '</p>' ; 