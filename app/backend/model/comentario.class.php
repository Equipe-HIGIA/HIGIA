<?php


class ComentarioNotas{



    public $comentario;

    public $nota;



    function ComentaNota(){

        $pdo = new Connection();
     
        $cn = "insert into cliente_profissional(comentario, nota) values (:comentario, :nota);";
        $st = $pdo->prepare($cn);
        $st->bindParam(':comentario',$this->comentario,PDO::PARAM_STR);
        $st->bindParam(':nota',$this->nota,PDO::PARAM_INT);
       
        $st->execute();
        $pdo->lastInsertId();
 


    }






}



?>
