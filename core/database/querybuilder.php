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
}
