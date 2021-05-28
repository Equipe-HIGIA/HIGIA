<?php


require_once("../db/Connection.class.php");

 
$con = new Connection();

$cpf = $_POST['cpf'];
$senhanova =  $_POST['senhanova'];

$st = $con->prepare("UPDATE usuario SET senha = '$senhanova'   WHERE cpf = '$cpf' ");
    
$st->execute();
echo "<script language='javascript' type='text/javascript'>
window.location.href='../../view/login.php';
</script>";



if($st->execute()){

echo "<script language='javascript' type='text/javascript'>
window.location.href='../../view/login.php';
</script>";
}else{
   echo("Error ao adicionar novo registro: ");
  
}
 ?>