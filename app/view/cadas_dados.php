<?php
session_start();
require_once("../backend/db/connection.class.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HÍGIA - Disposição para a Saude</title>


  <style> *{ font-family: "Baloo Tamma 2" !important;}</style>
   

   <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body class="bg-white">
  

<script>var i = setInterval(function () {
    
    clearInterval(i);
  
    // O código desejado é apenas isto:
    document.getElementById("loading").style.display = "none";
    document.getElementById("conteudo").style.display = "inline";

}, 2500);</script>


  <header>
<?php include 'include/header.php'; ?>
  </header>


<br><br>

<main>


<div id="loading" class="position-absolute top-50 start-50 translate-middle" style="display: block">
   <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="100px" height="100px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
  <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
    s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
    c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"/>
  <path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
    C22.32,8.481,24.301,9.057,26.013,10.047z">
    <animateTransform attributeType="xml"
      attributeName="transform"
      type="rotate"
      from="0 20 20"
      to="360 20 20"
      dur="0.5s"
      repeatCount="indefinite"/>
    </path>
  </svg></div>

  
  <div id="conteudo" style="display: none">

<article class="mb-4">
<p class="text-center fs-1">Complete seus dados para ter uma experiência completa.</p>

</article>


<div class="container-fluid  d-flex justify-content-center">
 
<div class="card  text-center  border-dark shadow" style="width: 28rem;">
  <div class="card-body">
  Cadastro para clientes que buscam por profissionais de Educacao Fisica.
  </div>
</div>
 
<br>

</div>



<p class=" d-flex justify-content-center  align-items-center">

<?php if($_SESSION['usuarioidentificacao_cliente'] == 0){ ?>
<button class="btn btn-outline-warning shadow-sm m-4 border border-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Cadastro para Cliente 
</button>
<?php }else{echo"<div class='container-fluid  d-flex justify-content-center'><div class='alert alert-danger d-inline-flex  align-items-center p-2 ' role='alert'>

  você ja fez o cadastro de cliente!</div></div>";}?>
</p>
<div class="collapse" id="collapseExample">
<div class="card card-body border-dark">

<form   method="POST" action="../backend/controller/dados_cliente.php" id="form1">
<div class="mb-3">
<input  id="pegaridoc" type="hidden" name="identificacao_cliente" value="<?php    echo $_SESSION['usuario']; ?>">

  <label for="nivel" class="form-label">Horas de Atividade Fisica por dia</label>
  <input type="text" class="form-control" name="nivel" placeholder="Horas por dia">
</div>
<div class="mb-3">
<label for="medicamentos" class="form-label">Medicamentos</label>
<select class="form-select" name="medicamentos" aria-label="Default select example">

  <option selected>Selecione uma das opções</option>
  <option value="Sim">Uso medicamentos</option>
  <option value="Não">Não uso medicamento</option>
  
</select>
 </div>
 <div class="col-12">
    <button type="submit" name="enviar1" class="btn btn-primary">Cadastrar-se</button>
  </div>
  </form>

</div>

</div>



<br><br>




<div class="container-fluid  d-flex justify-content-center">
 
<div class="card  text-center  border-dark shadow" style="width: 28rem;">
  <div class="card-body">
 O Cadastro de Serviços não é obrigatorio. A menos que o profissional tenha interesse em divulgar seus serviços.
  </div>
</div>
 
<br>

</div>



<p class=" d-flex justify-content-center  align-items-center">

<?php if( $_SESSION['usuarioidentificacao_anucio'] == 0){ ?>
<button class="btn btn-outline-warning shadow-sm m-4 border border-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">
  Cadastro para Profissional
</button>
<?php }else{echo"<div class='container-fluid  d-flex justify-content-center'><div class='alert alert-danger d-inline-flex  align-items-center p-2 ' role='alert'> você ja fez o cadastro do serviço!</div></div>";} ?>

</p>
<div class="collapse" id="collapse2">
<div class="card card-body border-dark">

<form method="POST"  action="../backend/controller/dados_servico.php" id="form2" enctype="multipart/form-data">
<div class="mb-3">
  <label for="grupo" class="form-label">Quantas pessoas voce pode atender</label>
  <input type="number" class="form-control" name="grupo" placeholder="Quantidade de Pessoas">
</div>

<input  id="pegaridop" type="hidden" name="identificacao_anucio" value="<?php    echo $_SESSION['usuario']; ?>">


<div class="mb-3">
  <label for="paginas" class="form-label">Redes Sociais</label>
  <input type="text" class="form-control" name="paginas" placeholder="WebSite/Facebook/Twitter/Instagram...">
</div>

<div class="mb-3">
  <label for="qualificacao" class="form-label">Qualificação</label>
  <input type="text" class="form-control" name="qualificacao" placeholder="Sua qualificação profissional.">
</div>

<div class="mb-3">
  <label for="especialidade" class="form-label">Especialidade</label>
  <input type="text" class="form-control" name="especialidade" placeholder="Sua area de especialidade.">
</div>

<div class="mb-3">
    <label for="servico" class="form-label">Descrição de seus serviços</label>
    <textarea class="form-control is-invalid" pattern=".{196}"  name="servico" maxlength="337" placeholder="Descreva brevemente, os seus serviços." required required title="198 characters minimum"></textarea>
    <div class="invalid-feedback">
      Descreva brevemente, os seus serviços.
    </div>
  </div>


<div class="mb-3">
<label for="raio" class="form-label">Raio de atuação</label>
<select class="form-select" name="raio" aria-label="Default select example">

  <option selected>Selecione uma das opções</option>
  <option value="1000">1000KM</option>
  <option value="500">500KM</option>
  <option value="400">400KM</option>
  <option value="300">300KM</option>
  <option value="200">200KM</option>
  <option value="100">100KM</option>
  <option value="50">50KM</option>
  <option value="40">40KM</option>
  <option value="30">30KM</option>
  <option value="20">20KM</option>
  <option value="10">10KM</option>
  
</select>
 </div>

 <div class="mb-3">
<label for="idades" class="form-label">Faixa etária de atendimento</label>
<select class="form-select" name="idades" aria-label="Default select example">

  <option selected>Selecione uma das opções</option>
  <option value="60+">60+</option>
  <option value="40-50">40-50</option>
  <option value="30-40">30-40</option>
  <option value="20-30">20-30</option>
  <option value="10-20">10-20</option>
  <option value=">0-10">0-10</option>
  <option value="De todas as idades">De todas as idades</option>
 
</select>
 </div>

 
<div class="mb-3">
<label for="ambiente" class="form-label">Ambiente</label>
<select class="form-select" name="ambiente" aria-label="Default select example">

  <option selected>Selecione uma das opções</option>
  <option value="Exercicios ao ar livre">Os exercicios praticados ao ar livre</option>
  <option value="Exercicios com uso de aparelhos">Os exercicios são feitos com uso de aparelhos</option>
  <option value="Ao ar livre e com uso de aparelhos">Ao ar livre e com uso de aparelhos</option>
 
  
</select>
 </div>



 <div class="mb-3">
<label for="localatendimento" class="form-label">Local de Atendimento</label>
<select class="form-select" name="localatendimento" aria-label="Default select example">

  <option selected>Selecione uma das opções</option>
  <option value="Vou ate a casa do cliente">Atendimento a domicilio</option>
  <option value="Possuo espaco para atendimento">Atendimento em local proprio</option>
  <option value="Atendo em academia, da preferencia do cliente">Atendimento em Academia</option>
 
  
</select>
 </div>



 <div class="mb-3">
<label for="especial" class="form-label">Atende Pessoas com Dificiencia</label>
<select class="form-select" name="especial" aria-label="Default select example">

  <option selected>Selecione uma das opções</option>
  <option value="Atendo pessoas com Dificiencia">Sim</option>
  <option value="Não Atendo pessoas com Dificiencia">Não</option>
 
  
</select>
 </div>

 <div class="mb-3">
 <label for="imagem" class="form-label">Imagem para Anuncio - 1</label>
    <input type="file" class="form-control" aria-label="file example" name="imagem" required>
     </div>

     <div class="mb-3">
 <label for="imagem_2" class="form-label">Imagem para Anuncio - 2</label>
    <input type="file" class="form-control" aria-label="file example" name="imagem_2" required>
     </div>

     <div class="mb-3">
 <label for="imagem_3" class="form-label">Imagem para Anuncio - 3</label>
    <input type="file" class="form-control" aria-label="file example" name="imagem_3" required>
     </div>

 <div class="col-12">
    <button type="submit" name="enviar2" class="btn btn-primary">Cadastrar</button>
  </div>
  </form>

</div>

</div>

<br>

  </div>
</main>
<br>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="app.js"></script>


</body>
</html>
