<?php
require_once("../db/Connection.class.php");
require_once("../model/perfil.class.php");


$idima = $_POST['identificacao_perfil'];


$arquivo = $_FILES['imagem'];
   

$con = new Connection();
$ds = new perfil();

$src=$ds->Redimensionar($arquivo, 820, "./imagemPerfil");

$cadastra = $con->prepare("INSERT INTO  imagem_perfil(imagens, identificacao_perfil) VALUES (:imagens, :identificacao_perfil) ");
$cadastra->bindParam(':imagens',$src);
$cadastra->bindParam(':identificacao_perfil',$idima);
   
      
$cadastra->execute();



echo "<script language='javascript' type='text/javascript'>
window.location.href='../../view/login.php';
</script>";


?>