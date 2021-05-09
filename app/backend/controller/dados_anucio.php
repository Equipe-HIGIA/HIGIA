<?php


require_once("../db/connection.class.php");

 
    $pdo = new Connection();

//$clique = 0;
 $id = $_POST['meu_id'];
 
    $stmt = $pdo->prepare("UPDATE profissional SET clique := clique + 1 WHERE id =$id");
    
    
    $stmt->execute();

     



?>