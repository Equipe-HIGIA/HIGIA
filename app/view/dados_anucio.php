<?php


require_once("../backend/db/connection.class.php");

$id = $_POST['meu_id'];

if(isset($_POST['enviar2'])){
   

    $pdo = new Connection();

$clique = 0;
    
 //   $stmt = $pdo->prepare("UPDATE notificacao SET clique = clique+$valor WHERE id='$id'");
  
    $stmt = $pdo->prepare("UPDATE notificacao SET clique := clique + 1 WHERE   id = $id ");
    //$stmt = $pdo->prepare(" INSERT INTO notificacao(clique) values (:clique)");
   
    $stmt->bindValue(':clique', $clique);
    //$stmt -> bindValue(":id", 10);
   
    $stmt->execute();

     
}


?>