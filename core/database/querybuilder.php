<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


    public function intoDB($descr)
    {
        $sqlCreate = "INSERT INTO todos(descr) VALUES(:descr)";

        $statement = $this->pdo->prepare($sqlCreate);

        $statement->execute(array(':descr' => $descr));
    }

    public function deleteFromDB($oldtask)
    {
        $sqlDelete = "DELETE FROM todos WHERE descr=:oldtask" ;

        $statement = $this->pdo->prepare($sqlDelete) ; 

        $statement->execute(array(':oldtask' => $oldtask));
    }

    public function modifyFromDB($oldDescr, $newDescr) 
    {
        $sqlModify = "UPDATE todos SET descr=:newDescr WHERE descr=:oldDescr" ;

        $statement = $this->pdo->prepare($sqlModify) ; 

        $statement->execute(array(':newDescr' => $newDescr, ':oldDescr' => $oldDescr));

    }

    public function completeTask($task)
    {
        
        $isCompleted = "SELECT completed FROM todos WHERE descr='$task'" ; //search how to automatically escape quotes

        $control = $this->pdo->prepare($isCompleted);

        $result = $control->execute();    

        $arr = $control->fetchAll(); 
       
        $completed = $arr[0]["completed"] ;

        if($completed === '0'){

        $sqlComplete = "UPDATE todos SET completed='1' WHERE descr=:task" ;

        $statement = $this->pdo->prepare($sqlComplete) ; 

        $statement->execute(array(':task'=>$task));

        } else {
            die ('task already completed. 
            <p><a href="/"> HOME </a></p>' ); 
        }
    }
}
