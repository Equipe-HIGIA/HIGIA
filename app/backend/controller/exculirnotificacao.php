<?php


require_once("../db/connection.class.php");

$pdo = new Connection();


$idnotificacao = $_GET['id']; 

$stmt = $pdo->prepare("DELETE FROM notificacao  WHERE id = $idnotificacao ");
$stmt->execute();


echo "<script language='javascript' type='text/javascript'>
window.location.href='../../view/perfil.php';
</script>";

?>