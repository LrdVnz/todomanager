<?php 


 return [

     'database' => [

         'connection' => 'mysql:host=127.0.0.1',

         'name' => 'todomanager' , 

         'user' => 'vincenzo' , 

         'password' => 'Resdenteivoll1' , 

         'options' => [
             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
         ], 
     ]
 ] ;