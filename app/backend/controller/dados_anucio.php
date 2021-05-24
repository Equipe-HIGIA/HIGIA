<?php


require_once("../db/connection.class.php");

 
    $pdo = new Connection();

//$clique = 0;
 $id = $_POST['meu_id'];
 $notificacao = "uma pessoa viu o seu contato";
    $stmt = $pdo->prepare("INSERT INTO notificacao(notificacao,identificacao_notifcacao) VALUES(:notificacao, :identificacao_notifcacao)");
    $stmt->bindParam(':notificacao',$notificacao);
    $stmt->bindParam(':identificacao_notifcacao',$id);
    
    
    $stmt->execute();

     



?>