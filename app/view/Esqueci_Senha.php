<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style> *{ font-family: "Baloo Tamma 2" !important;}</style>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
    <!-- CSS only -->
    <link rel="shortcut icon" href="../../img/logo.ico"/>
  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <title>Hígia</title>
  </head>
  <body>


<div class="container ">

<div class="card shadow-lg  position-absolute top-50 start-50 translate-middle" style="width: 49rem;">
  <div class="card-body">
    <h5 class="card-title">Recuperar a senha</h5>
   <form action="EsqueciSenha.php" method="POST">
   
   <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">CPF</label>
    <input type="text" name="cpf" class="form-control cpf" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
   
  <button  type="submit"class="btn btn-outline-warning">Enviar</button>
   </form>


  </div>
</div>


</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="js/jquery.mask.min.js"></script>
 
    <script>
     $(document).ready(function(){
      $('.cpf').mask('000.000.000-00');

    

     })



  </script>
  </body>
</html>
