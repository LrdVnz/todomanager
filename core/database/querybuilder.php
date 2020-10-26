<?php

class QueryBuilder
{

    protected $mysqli;

    public function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }

    public function selectAll()
    {
        $result = $this->mysqli->query(
            "SELECT * FROM todos"
        );

        $arr = $result->fetch_all(MYSQLI_ASSOC) ;
        
        $final = [];

        foreach($arr as $item) {
        array_push($final, $item);
        }

        return $final ; 
    }

    public function intoDB($descr, $duedate)
    { 
        $descr = $this->mysqli->real_escape_string($descr);
        
        $result = $this->mysqli->query(
            "INSERT INTO todos(descr, duedate) VALUES('$descr', '$duedate')"
        );
        if(!$result){
              die($this->mysqli->error);
        }
    }

    public function deleteFromDB($oldTask)
    {
        $oldTask = $this->mysqli->real_escape_string($oldTask);

        $this->mysqli->query(
            "DELETE FROM todos WHERE descr='$oldTask' " 
        ) ; 
    }

    public function modifyFromDB($oldDescr, $newDescr) 
    {
        $oldDescr = $this->mysqli->real_escape_string($oldDescr);

        $newDescr = $this->mysqli->real_escape_string($newDescr);

        $this->mysqli->query(
            "UPDATE todos SET descr='$newDescr' WHERE descr='$oldDescr' "
        ) ; 
    }

    public function completeTask($task)
    {  
        $task = $this->mysqli->real_escape_string($task);

        $control = $this->mysqli->query(
            "SELECT completed FROM todos WHERE descr='$task' "
        );

        $arr = $control->fetch_assoc(); 

        if($arr["completed"] === '0'){

          $this->mysqli->query(
              "UPDATE todos SET completed='1' WHERE descr='$task' "
          ) ; 

        } else {
            die ('task already completed. 
            <p><a href="/"> HOME </a></p>' ); 
        } 
    }
}
