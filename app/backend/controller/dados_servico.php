<?php

require_once("../db/Connection.class.php");
require_once("../model/dado_servico.class.php");

if(isset($_POST['enviar2'])){
    
    //$arquivo = $_FILES['imagem']['name'];
    $arquivo = $_FILES['imagem'];
    $arquivo2 = $_FILES['imagem_2'];
     $arquivo3 = $_FILES['imagem_3'];
    
  //  $ext = strtolower(substr($arquivo,-4)); //Pegando extensão do arquivo
  //  $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
  // $dir = '../../view/imagemProfissional/'; //Diretório para uploads
 
  // move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
   
$con = new Connection();
$ds = new DadosServico();


$idima = $_POST['identificacao_anucio'];

$ds->paginas = $_POST['paginas'];
$ds->especialidade = $_POST['especialidade'];
$ds->qualificacao = $_POST['qualificacao'];
$ds->ambiente = $_POST['ambiente'];
$ds->grupo = $_POST['grupo'];
$ds->localatendimento = $_POST['localatendimento'];
$ds->servico = $_POST['servico'];
$ds->raio = $_POST['raio'];
$ds->idades = $_POST['idades'];
$ds->especial = $_POST['especial'];
$ds->identificacao_anucio = $_POST['identificacao_anucio'];
$src=$ds->Redimensionar($arquivo,   820, "./imagemProfissional");
$src2=$ds->Redimensionar($arquivo2, 820, "./imagemProfissional");
$src3=$ds->Redimensionar($arquivo3, 820, "./imagemProfissional");

$cadastra = $con->prepare("INSERT INTO  imagem  (imagens, imagens_2,imagens_3, identificacao_imagem) VALUES (:imagens, :imagens_2, :imagens_3, :identificacao_imagem) ");
$cadastra->bindParam(':imagens',$src);
$cadastra->bindParam(':imagens_2',$src2);
$cadastra->bindParam(':imagens_3',$src3);
$cadastra->bindParam(':identificacao_imagem',$idima);
      
$cadastra->execute();



$ds->Dads();


echo "<script language='javascript' type='text/javascript'>
window.location.href='../../view/login.php';
</script>";



}



?>

