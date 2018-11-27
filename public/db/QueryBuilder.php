<?php

Class QueryBuilder{

    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }


    public function selectAll($table,$class)
    {
        $statement= $this->pdo->prepare("Select * from  {$table}");
        $statement->execute();
        return $statement->fetchALL(PDO::FETCH_CLASS,$class);

    }
}

?>