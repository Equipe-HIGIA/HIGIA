<?php 


require_once("../db/connection.class.php");

$pdo = new Connection();


$idcomentario = $_GET['id']; 
$stmt = $pdo->prepare("DELETE FROM cliente_profissional  WHERE id = $idcomentario ");
$stmt->execute();

echo "<script language='javascript' type='text/javascript'>
window.location.href='../../view/perfil.php';
</script>";


?>