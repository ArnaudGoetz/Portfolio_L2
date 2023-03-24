<?php

sleep(1);

require_once "../models/Projet.php";
$table2 = new Projet();

$ajaxprojects = $table2->ajaxProjects($_GET['i']);


echo json_encode($ajaxprojects);
    
