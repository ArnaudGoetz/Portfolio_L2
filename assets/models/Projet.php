<?php

require_once __DIR__ . '/Database.php';

class Projet extends Database{

    protected $projects;

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProjects():array{

        $this->projects = $this->pdo->query('SELECT * FROM Projet')->fetchAll();
        return $this->projects;
    }
   
}

