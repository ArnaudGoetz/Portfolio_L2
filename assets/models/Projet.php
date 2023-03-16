<?php

require_once __DIR__ . '/Database.php';

class Projet extends Database{

    protected $projects;

    
    public function __construct(){
        parent::__construct();
        $this->initTable();
    }

    private function initTable(){
        $this->pdo->query('CREATE TABLE IF NOT EXISTS Projet(
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            Title TEXT NOT NULL,
            Type TEXT NOT NULL,
            Description TEXT NOT NULL )');
    }

    public function getAllProjects():array{

        $this->projects = $this->pdo->query('SELECT * FROM Projet')->fetchAll();
        return $this->projects;
    }

    private function checkTitle(string $Title):bool{
        return $Title !== '' &&  strlen($Title) <= 255;
    }

    private function checkType(string $Type): bool{
        return $Type !== '' &&  strlen($Type) <= 255;
    }

    private function checkDescription(string $Description): bool{
        return $Description !== '' &&  strlen($Description) <= 300;
    }

    public function createPost(string $Title, string $Type, string $Description){
        if($this->checkTitle($Title) && $this->checkType($Type) && $this->checkDescription($Description)){
            $new = $this->pdo->prepare(
                "INSERT INTO Projet ('Title','Type','Description') VALUES (:Title, :Type, :Description )"
            );
            $new->bindValue(':Title', htmlspecialchars($Title));
            $new->bindValue(':Type', htmlspecialchars($Type));
            $new->bindValue(':Description', htmlspecialchars($Description));
            $new->execute();
        }
    }

}
   


