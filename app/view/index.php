<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HÍGIA - Disposição para a Saude</title>


  <style> *{ font-family: "Baloo Tamma 2" !important;}
  
  
  
  </style>
   
   <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
   <link rel="shortcut icon" href="../../img/logo.ico"/>
  

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

<br>

<?php
header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
?>


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

<form class="d-flex"   method="GET" action="busca.php">



 
  <input type="text" class="form-control shadow-sm rounded me-2" name="servico" placeholder="pesquisar....">

<div class="me-2">
<button class="btn btn-outline-warning shadow-sm btn-lg rounded-pill border border-2"  type="submit">Search</button>
</div>

</form>

<div class="container-fluid">
  
<aside class="p-3 mb-1 ">
<div class="d-flex flex-column align-items-stretch bg-white p-1 " style="width: 380px;">
    <h3 class="mb-3">filtragem</h3>
<form method="GET" action="busca_ava.php" id="form-pesquisa">

<div class="mb-4 m-2">
  <label for="qualificacao" class="form-label">Qualificação</label>
  <input type="text" class="form-control" name="qualificacao" placeholder="Qual tipo de profissional você quer...." required>
</div>

 

<div class="mb-4 m-2">
<label for="ambiente" class="form-label">Ambiente</label>
<select class="form-select" name="ambiente" aria-label="Default select example" required>

  <option selected>Selecione uma das opções</option>
  <option value="Exercicios ao ar livre">Os exercicios praticados ao ar livre</option>
  <option value="Exercicios com uso de aparelhos">Os exercicios são feitos com uso de aparelhos</option>
  <option value="Ambas as opcoes">Ao ar livre e com uso de aparelhos</option>
 
  
</select>
 </div>

 
 <div class="mb-4 m-2">
<label for="localatendimento" class="form-label">Local de Atendimento</label>
<select class="form-select" name="localatendimento" aria-label="Default select example" required>

  <option selected>Selecione uma das opções</option>
  <option value="Vou ate a casa do cliente">Atendimento a domicilio</option>
  <option value="Possuo espaco para atendimento">Atendimento em local proprio</option>
  <option value="Atendo em academia, da preferencia do cliente">Atendimento em Academia</option>
 
  
</select>
 </div>


 <div class="mb-4 m-2">
<label for="especial" class="form-label">Atende Pessoas com Dificiencia</label>
<select class="form-select" name="especial" aria-label="Default select example" required>

  <option selected>Selecione uma das opções</option>
  <option value="Atendo pessoas com Dificiencia">Sim</option>
  <option value="Não Atendo pessoas com Dificiencia">Nao</option>
 
  
</select>
 </div>


 <div class="me-2">
<button class="btn btn-outline-warning shadow-sm  btn-lg rounded-pill border border-2" type="submit">filtrar</button>
</div>

</form>
 </div>
</aside>

</div>


    <h1 class="fs-1 fw-bolder m-4  text-center position-absolute top-50 start-50 translate-middle">Pesquise Algo do seu interrese</h1>
   



</div>
 </main>

<br><br>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
<script sc="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>



</body>
</html>