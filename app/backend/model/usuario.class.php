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
      
          $sql = "SELECT * FROM usuario u left join notificacao n  on (u.id = n.id) left join cliente_profissional cp on(u.id = cp.id) left join profissional  p on( cp.identificacao = p.id )   where cpf like :cpf and  senha = :senha ";
           $pdo = new Connection();
    $st = $pdo->prepare($sql);
    $st->bindParam(':cpf',$this->cpf,PDO::PARAM_STR);
    $st->bindParam(':senha',$this->senha,PDO::PARAM_STR);
    $st->execute();
   
    if ($st->rowCount()==0){
       
        return false; 
    } else {
        //$reg = $st->fetchAll();
     $reg = $st->fetch();
        
       // $this->id = $reg[0]["id"];
      $_SESSION['usuario'] =  $reg["id"];
      $_SESSION['usuariocep'] =  $reg["cep"];
      $_SESSION['usuarionome'] =  $reg["nome"];
      $_SESSION['usuariocidade'] =  $reg["cidade"];
      $_SESSION['usuarioendereco'] =  $reg["endereco"];
     $_SESSION['usuarionotificacao'] =  $reg["clique"];
     
     
      
      
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