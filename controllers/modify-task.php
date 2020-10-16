<?php 
echo "<a href='/'>Home</a>";

$oldDescr = htmlspecialchars($_POST["oldDescr"]) ; 

$newDescr = htmlspecialchars($_POST["newDescr"]) ; 

$app['database']->modifyFromDB($oldDescr, $newDescr);

echo '<p> Task " ' . $oldDescr . 
     ' " modified into " ' . $newDescr . ' "  </p>' ;  