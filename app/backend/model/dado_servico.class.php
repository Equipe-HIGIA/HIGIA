<?php

class DadosServico{


    public $paginas; 
    public $especialidade;
    public $qualificacao;
    public $ambiente;
    public $grupo;
    public $localatendimento;
    public $servico;
    public $raio;
    public $idades;
    public $especial;
    public $identificacao_anucio;
   

    function Dads(){

        $pdo = new Connection();
     
     
        
        $s = "insert into profissional(paginas, especialidade, qualificacao, ambiente, grupo, localatendimento, servico, raio, idades, especial, identificacao_anucio) values (:paginas, :especialidade, :qualificacao, :ambiente, :grupo, :localatendimento, :servico, :raio, :idades, :especial,:identificacao_anucio)";
        
        $st = $pdo->prepare($s);
        $st->bindParam(':paginas',$this->paginas,PDO::PARAM_STR);
        $st->bindParam(':especialidade',$this->especialidade,PDO::PARAM_STR);
        $st->bindParam(':qualificacao',$this->qualificacao,PDO::PARAM_STR);
        $st->bindParam(':ambiente',$this->ambiente,PDO::PARAM_STR);
        $st->bindParam(':grupo',$this->grupo,PDO::PARAM_INT);
        $st->bindParam(':localatendimento',$this->localatendimento,PDO::PARAM_STR);
        $st->bindParam(':servico',$this->servico,PDO::PARAM_STR);
        $st->bindParam(':raio',$this->raio,PDO::PARAM_STR);
        $st->bindParam(':idades',$this->idades,PDO::PARAM_STR);
        $st->bindParam(':especial',$this->especial,PDO::PARAM_STR);
        $st->bindParam(':identificacao_anucio',$this->identificacao_anucio,PDO::PARAM_STR);
       
        $st->execute();  
   $pdo->lastInsertId();


  
  
}


public function Redimensionar($imagem, $largura, $pasta){

$salt = openssl_random_pseudo_bytes(10);
$random = uniqid(rand(),true);
$ite = 18432;
    $name = hash_pbkdf2('sha256', $random, $salt, $ite, 30);

    if ($imagem['type']=="image/jpeg"){
        $img = imagecreatefromjpeg($imagem['tmp_name']);
    }else if ($imagem['type']=="image/gif"){
        $img = imagecreatefromgif($imagem['tmp_name']);
    }else if ($imagem['type']=="image/png"){
        $img = imagecreatefrompng($imagem['tmp_name']);
    }
    $x   = imagesx($img);
    $y   = imagesy($img);
    $autura = ($largura * $y)/$x;

    $nova = imagecreatetruecolor($largura, $autura);
    imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura, $autura, $x, $y);

    if ($imagem['type']=="image/jpeg"){
        $local="$pasta/$name".".jpg";
        imagejpeg($nova, $local);
    }else if ($imagem['type']=="image/gif"){
        $local="$pasta/$name".".gif";
        imagejpeg($nova, $local);
    }else if ($imagem['type']=="image/png"){
        $local="$pasta/$name".".png";
        imagejpeg($nova, $local);
    }       

    imagedestroy($img);
    imagedestroy($nova);    

    return $local;
}


}



?>