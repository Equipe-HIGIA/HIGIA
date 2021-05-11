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
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    

</head>
<body class="bg-white">
  
<header>

<?php include 'include/header.php'; ?>
</header>

<br>


   <main>
  
 
<form class="d-flex"   method="GET" action="busca.php">



 
  <input type="text" class="form-control shadow-sm rounded me-2" name="servico" placeholder="pesquisar....">

<div class="me-2">
<button class="btn btn-outline-success shadow-sm rounded btn-lg" type="submit">Search</button>
</div>

</form>

<div class="container-fluid">
  
<aside class="p-3 mb-1 ">
<div class="d-flex flex-column align-items-stretch bg-white border-end p-1" style="width: 380px;">
    <h3>filtragem</h3>
<form method="GET" action="busca_ava.php" id="form-pesquisa">

<div class="mb-3">
  <label for="qualificacao" class="form-label">Qualificação</label>
  <input type="text" class="form-control" name="qualificacao" placeholder="Qual tipo de profissional você quer...." required>
</div>

 

<div class="mb-3">
<label for="ambiente" class="form-label">Ambiente</label>
<select class="form-select" name="ambiente" aria-label="Default select example" required>

  <option selected>Selecione uma das opções</option>
  <option value="Exercicios ao ar livre">Os exercicios praticados ao ar livre</option>
  <option value="Exercicios com uso de aparelhos">Os exercicios são feitos com uso de aparelhos</option>
  <option value="Ambas as opcoes">Ao ar livre e com uso de aparelhos</option>
 
  
</select>
 </div>

 
 <div class="mb-3">
<label for="localatendimento" class="form-label">Local de Atendimento</label>
<select class="form-select" name="localatendimento" aria-label="Default select example" required>

  <option selected>Selecione uma das opções</option>
  <option value="Vou ate a casa do cliente">Atendimento a domicilio</option>
  <option value="Possuo espaco para atendimento">Atendimento em local proprio</option>
  <option value="Atendo em academia, da preferencia do cliente">Atendimento em Academia</option>
 
  
</select>
 </div>


 <div class="mb-3">
<label for="especial" class="form-label">Atende Pessoas com Dificiencia</label>
<select class="form-select" name="especial" aria-label="Default select example" required>

  <option selected>Selecione uma das opções</option>
  <option value="Atendo pessoas com Dificiencia">Sim</option>
  <option value="Não Atendo pessoas com Dificiencia">Nao</option>
 
  
</select>
 </div>


 <div class="me-2">
<button class="btn btn-outline-success shadow-sm rounded btn-lg" type="submit">filtrar</button>
</div>

</form>
 </div>
</aside>

</div>

<h1 class="fs-1 fw-bolder m-4  text-center position-absolute top-50 start-50 translate-middle">Pesquise Algo do seu interrese.</h1>



 </main>

<br><br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script sc="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>



</body>
</html>