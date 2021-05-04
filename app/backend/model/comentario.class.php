<?php


class ComentarioNotas{



    public $comentario;
    public $nota;
    public $moderador;
    public $identificacao;


    function ComentaNota(){

        $pdo = new Connection();
     
        $cn = "insert into cliente_profissional(comentario, nota, moderador, identificacao) values (:comentario, :nota, :moderador, :identificacao);";
        $st = $pdo->prepare($cn);
        $st->bindParam(':comentario',$this->comentario,PDO::PARAM_STR);
        $st->bindParam(':nota',$this->nota,PDO::PARAM_INT);
        $st->bindParam(':moderador',$this->moderador,PDO::PARAM_STR);
        $st->bindParam(':identificacao',$this->identificacao,PDO::PARAM_INT);
       
        $st->execute();
        $pdo->lastInsertId();
 


    }






}



?>
