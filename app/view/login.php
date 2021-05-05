<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hígia - Disposicao para a Saude</title>

    <style> *{ font-family: "Baloo Tamma 2" !important;}</style>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



</head>
<body class="bg-light">

<div class="container">

<div class=" card  shadow-lg text-center  position-absolute top-50 start-50 translate-middle" style=" width: 49rem;">
<div class="row g-0">

  <div class="col-md-4">
      <img src="../../img/l.jpg" alt="..." style="max-width: 277px; height:360px;">
      <h3 class="position-absolute top-0 start-0 ">Faça o seu login</h3>  

  </div>
    <div class="col-md-8">
  <div class="card-body m-1">
   
   

<form action="../backend/controller/login.php"  method="POST">
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">CPF</label>
    <input type="text" name="cpf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button  type="submit"class="btn btn-outline-warning">Login</button>

<p class="text-center text-danger">
<?php
session_start();


if (isset($_SESSION['usuario']) && $_SESSION['usuario']==0) {   
   unset($_SESSION['usuario']);  
   echo ' <div class="alert alert-danger" role="alert">
   Usuário e/ou senha inválidos!
 </div>';
}

?>

</p>



</form>
   
   </div>
   <button class="btn btn-primary botao-volta" onclick="window.history.back()">Voltar</button>  
   </div>
</div>
</div>
</div>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>