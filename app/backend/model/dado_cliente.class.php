<?php



class DadosCliente {
 
    
  
    public $nivel; 
    public $medicamentos;
   
  

function Dadc(){


    $pdo = new Connection();
    
    $sql = "insert into cliente(nivel, medicamentos) values (:nivel, :medicamentos)";
   
    $st = $pdo->prepare($sql);
    $st->bindParam(':nivel',$this->nivel,PDO::PARAM_INT);
    $st->bindParam(':medicamentos',$this->medicamentos,PDO::PARAM_STR);
    
    $st->execute();  
    $pdo->lastInsertId();
  
     //'{$usuario_id}'
}



}





?>