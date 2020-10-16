<?php

class Task
 {
     public $name ; 
    
     public $completed = false;
    
     public $duedate ; 

     public function create($name)
     {
        $this->name = $name; 
     }
     
     public function show()
     {
         $task = [
             $this->name, 
             $this->completed,
             $this->duedate,
         ];
          
         var_dump($task);
     }
 }