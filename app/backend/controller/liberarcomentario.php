<?php

require_once("../db/connection.class.php");

$pdo = new Connection();


$idcomentario = $_GET['id']; 
$stmt = $pdo->prepare("UPDATE cliente_profissional SET moderador = 'sim'  WHERE id = $idcomentario ");
$stmt->execute();

?>