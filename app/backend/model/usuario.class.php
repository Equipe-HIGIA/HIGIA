<?php 
class Usuario {
    public $id;
    public $cpf;
    public $senha;
    public $endereco; 
    public $numero; 
    public $cep; 
    public $cidade; 
    public $celular; 
    public $fixo; 
    public $email; 
    public $genero;
    public $nome; 



    

function valida() {
      
    $sql = "SELECT * FROM usuario where cpf like :cpf and  senha = :senha ";
  
   $pdo = new Connection();
     $st = $pdo->prepare($sql);
    $st->bindParam(':cpf',$this->cpf,PDO::PARAM_STR);
     $st->bindParam(':senha',$this->senha,PDO::PARAM_STR);
    $st->execute();
   
    $sql2 = "SELECT * FROM usuario u left join notificacao n  on (u.id = n.id) left join cliente_profissional cp on(u.id = cp.id) left join profissional  p on( cp.identificacao = p.id )   where cpf like :cpf and  senha = :senha ";
  
    $pdo = new Connection();
      $stm = $pdo->prepare($sql2);
     $stm->bindParam(':cpf',$this->cpf,PDO::PARAM_STR);
      $stm->bindParam(':senha',$this->senha,PDO::PARAM_STR);
     $stm->execute();
    
     $sql3 = "SELECT * FROM usuario u left join cliente c on (c.identificacao_cliente = u.id) where cpf like :cpf and  senha = :senha ";
     $pdo = new Connection();
     $stmc = $pdo->prepare($sql3);
    $stmc->bindParam(':cpf',$this->cpf,PDO::PARAM_STR);
     $stmc->bindParam(':senha',$this->senha,PDO::PARAM_STR);
    $stmc->execute();

    $sql4 = "SELECT * FROM usuario u left join profissional c on (c.identificacao_anucio = u.id) where cpf like :cpf and  senha = :senha ";
     $pdo = new Connection();
     $stmtc = $pdo->prepare($sql4);
    $stmtc->bindParam(':cpf',$this->cpf,PDO::PARAM_STR);
     $stmtc->bindParam(':senha',$this->senha,PDO::PARAM_STR);
    $stmtc->execute();

     if ($st->rowCount()==0 && $stm->rowCount()==0 && $stmc->rowCount()==0 && $stmtc->rowCount()==0) {
       
        return false; 
    } else {
        //$reg = $st->fetchAll();
     $reg = $st->fetch();
     $reg2 = $stm->fetch();
     $reg3 = $stmc->fetch();
     $reg4 = $stmtc->fetch();
     
       // $this->id = $reg[0]["id"];
      $_SESSION['usuario'] =  $reg["id"];
      $_SESSION['usuariocep'] =  $reg["cep"];
      $_SESSION['usuarionome'] =  $reg["nome"];
      $_SESSION['usuariocidade'] =  $reg["cidade"];
      $_SESSION['usuarioendereco'] =  $reg["endereco"];
    
     $_SESSION['usuarionotificacao'] =  $reg2["clique"];
     $_SESSION['usuarioraio'] =  $reg2["raio"];
     $_SESSION['usuariodades'] =  $reg2["idades"];
     $_SESSION['usuarioserviço'] =  $reg2["servico"];
     $_SESSION['usuariopaginas'] =  $reg2["paginas"];
     $_SESSION['usuarioespecialidade'] =  $reg2["especialidade"];
     $_SESSION['usuarioambiente'] =  $reg2["ambiente"];
     $_SESSION['usuarioqualificacao'] =  $reg2["qualificacao"];
     $_SESSION['usuariolocalatendimento'] =  $reg2["localatendimento"];
     $_SESSION['usuarioidentificacao_anucio'] =  $reg4["identificacao_anucio"];

     $_SESSION['usuarioidentificacao_cliente'] =  $reg3["identificacao_cliente"];
     
     
      
      
        return true;
    }     
   
}

function incluir() {
    $clique = 0;

    $q = "insert into usuario(cpf, senha,endereco,numero,cep,cidade,celular,fixo,email,genero,nome) values (:cpf, :senha, :endereco,:numero,:cep,:cidade,:celular,:fixo,:email,:genero,:nome)";
    $pdo = new Connection();
    $st = $pdo->prepare($q);
    $st->bindParam(':cpf',$this->cpf,PDO::PARAM_STR);
    $st->bindParam(':senha',$this->senha,PDO::PARAM_STR);    
    $st->bindParam(':endereco',$this->endereco,PDO::PARAM_STR);
    $st->bindParam(':numero',$this->numero,PDO::PARAM_STR);
    $st->bindParam(':cep',$this->cep,PDO::PARAM_STR);
    $st->bindParam(':cidade',$this->cidade,PDO::PARAM_INT);
    $st->bindParam(':celular',$this->celular,PDO::PARAM_STR);
    $st->bindParam(':fixo',$this->fixo,PDO::PARAM_STR);
    $st->bindParam(':email',$this->email,PDO::PARAM_STR);
    $st->bindParam(':genero',$this->genero,PDO::PARAM_STR);
    $st->bindParam(':nome',$this->nome,PDO::PARAM_STR);
   
    $st->execute();    
    $this->id = $pdo->lastInsertId();

    
    $stmt = $pdo->prepare(" INSERT INTO notificacao(clique) values (:clique)");
   
    $stmt->bindValue(':clique', $clique);
   
    $stmt->execute();

} 




}