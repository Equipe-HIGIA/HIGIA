<?php



class DadosCliente {
 
    
  
    public $nivel; 
    public $medicamentos;
    public $identificacao_cliente;
  

function Dadc(){


    $pdo = new Connection();
    
    $sql = "insert into cliente(nivel, medicamentos,identificacao_cliente) values (:nivel, :medicamentos,:identificacao_cliente)";
   
    $st = $pdo->prepare($sql);
    $st->bindParam(':nivel',$this->nivel,PDO::PARAM_INT);
    $st->bindParam(':medicamentos',$this->medicamentos,PDO::PARAM_STR);
    $st->bindParam(':identificacao_cliente',$this->identificacao_cliente,PDO::PARAM_STR);
    
    $st->execute();  
    $pdo->lastInsertId();
  
}



}





?>