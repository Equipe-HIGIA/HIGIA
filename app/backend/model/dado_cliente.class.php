<?php



class DadosCliente {
 
    
  
    public $nivel; 
    public $medicamentos;
   
  

function Dadc(){


    $pdo = new Connection();
    $usuario_id = $pdo->lastInsertId();
  
    $sql = "insert into cliente(nivel, medicamentos, usuario_id) values (:nivel, :medicamentos, :usuario_id)";
   
    $st = $pdo->prepare($sql);
    $st->bindParam(':nivel',$this->nivel,PDO::PARAM_INT);
    $st->bindParam(':medicamentos',$this->medicamentos,PDO::PARAM_STR);
    $st->bindParam(':usuario_id',$usuario_id);
   
    $st->execute();  
     
     //'{$usuario_id}'
}



}





?>