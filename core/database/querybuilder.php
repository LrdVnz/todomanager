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

    public function intoDB($descr)
    {
        $this->mysqli->query(
            "INSERT INTO todos(descr) VALUES('$descr')"
        );
    }

    public function deleteFromDB($oldtask)
    {
        $this->mysqli->query(
            "DELETE FROM todos WHERE descr='$oldtask' " 
        ) ; 
    }

    public function modifyFromDB($oldDescr, $newDescr) 
    {
        $this->mysqli->query(
            "UPDATE todos SET descr='$newDescr' WHERE descr='$oldDescr' "
        ) ; 
    }

    public function completeTask($task)
    {  
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
