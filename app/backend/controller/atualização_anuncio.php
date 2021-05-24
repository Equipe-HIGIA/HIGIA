<?php


require_once("../db/Connection.class.php");

 if(isset($_POST['enviar_atualizar'])){
  
$con = new Connection();


$paginas = $_POST['paginas'];
$especialidade = $_POST['especialidade'];
$qualificacao = $_POST['qualificacao'];
$ambiente = $_POST['ambiente'];
$grupo = $_POST['grupo'];
$localatendimento = $_POST['localatendimento'];
$servico = $_POST['servico'];
$raio = $_POST['raio'];
$idades = $_POST['idades'];
$especial = $_POST['especial'];
$identificacao_anucio = $_POST['identificacao_anucio'];
//$st = $pdo->prepare("UPDATE profissional SET paginas = $paginas, especialidade = $especialidade,   qualificacao = $qualificacao,  ambiente = $ambiente, grupo = $grupo, localatendimento = $localatendimento, servico = $servico, raio = $raio, idades = $idades, especial = $especial   WHERE identificacao_anucio = $identificacao_anucio ");
$st = $con->prepare("UPDATE profissional SET paginas = '$paginas', especialidade = '$especialidade',   qualificacao = '$qualificacao',  ambiente = '$ambiente', grupo = '$grupo', localatendimento = '$localatendimento', servico = '$servico', raio = '$raio', idades = '$idades', especial = '$especial'   WHERE identificacao_anucio = '$identificacao_anucio' ");
    
$st->execute();



echo "<script language='javascript' type='text/javascript'>
window.location.href='../../view/perfil.php';
</script>";

 }

?>