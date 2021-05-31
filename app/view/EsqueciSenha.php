<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Higia</title>
     <style> *{ font-family: "Baloo Tamma 2" !important;}</style>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
    <link rel="shortcut icon" href="../../img/logo.ico"/>
  
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

 </head>
 <body>

<?php 


require_once("../backend/db/connection.class.php");

 
    $pdo = new Connection();
    
 $recuperar = $_POST['cpf'];


 $sql = "SELECT * FROM usuario where cpf  ='$recuperar' ";
 $st = $pdo->prepare($sql);
 $st->execute();
 

 if ($st->rowCount()==0 ) {
    echo"<div class='alert alert-danger  position-absolute top-50 start-50 translate-middle' role='alert'>Cpf não foi achado no nosso banco de dados</div>";
  
    return false; 
}
 else{ ?>

<div class="card shadow-lg  position-absolute top-50 start-50 translate-middle" style="width: 49rem;">
  <div class="card-body">
    <h5 class="card-title">Recuperar a senha</h5>
   <form action="../backend/controller/recuperandoSenha.php" method="POST">
   
   <input type="hidden" name="cpf" value="<?php echo $recuperar;?>">
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nova Senha</label>
    <input type="password" name="senhanova" class="form-control" id="exampleInputPassword1">
  </div>
   
  <button  type="submit"class="btn btn-outline-warning">Enviar</button>
   </form>


  </div>
</div>



 
 <?php
    return true;
}
 ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>