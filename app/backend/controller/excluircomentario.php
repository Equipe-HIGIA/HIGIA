<?php 


require_once("../db/connection.class.php");

$pdo = new Connection();


$idcomentario = $_GET['id']; 
$stmt = $pdo->prepare("DELETE FROM cliente_profissional  WHERE id = $idcomentario ");
$stmt->execute();

?>