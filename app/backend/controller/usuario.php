<?php 
require_once("../db/Connection.class.php");
require_once("../model/usuario.class.php");
session_start();

$pdo = new Connection();
   
$cpf = $_POST['cpf'];
$st = $pdo->prepare("SELECT * FROM usuario WHERE cpf = '$cpf'");

$st->execute();  






$resultados = $st->rowCount();

if($resultados > "0"){
    echo "<!doctype html>
    <html lang='en'>
      <head>
        <!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    
        <link href='https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap' rel='stylesheet'>  
        <style> *{ font-family: 'Baloo Tamma 2' !important;}</style>
   
        <!-- Bootstrap CSS -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
    
        <link rel='shortcut icon' href='../../img/logo.ico'/>
        </head>
      <body>
       


      <button class='btn  btn-outline-warning btn-lg botao-volta shadow-sm m-2 rounded' onclick='window.history.back()'><svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='currentColor' class='bi bi-arrow-left' viewBox='0 0 16 16'>
      <path fill-rule='evenodd' d='M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z'/>
    </svg>Voltar</button>
      <div class='alert alert-danger  position-absolute top-50 start-50 translate-middle' role='alert'>O cpf digitado já foi cadastro no sistema, tente outro cpf!</div>

        <!-- Optional JavaScript; choose one of the two! -->
    
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4' crossorigin='anonymous'></script>
    
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js' integrity='sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p' crossorigin='anonymous'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js' integrity='sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT' crossorigin='anonymous'></script>
        -->
      </body>
    </html>
    ";  

}else{


if (isset($_POST['op']) && $_POST['op']=="inc") {
    $con = new Connection();
    $usuario = new Usuario();
    $usuario->cpf = $_POST['cpf'];
    $usuario->senha = $_POST['senha'];
    $usuario->endereco =  $_POST['endereco']; 
    $usuario->numero =  $_POST['numero']; 
    $usuario->cep =  $_POST['cep']; 
    $usuario->cidade =  $_POST['cidade']; 
    $usuario->celular =  $_POST['celular']; 
    $usuario->fixo =  $_POST['fixo']; 
    $usuario->email =  $_POST['email']; 
    $usuario->genero =  $_POST['genero'];
    $usuario->nome =  $_POST['nome']; 
      $usuario->incluir();
    if ($usuario->id>0) {
        unset($_SESSION["usuario"]);
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='../../view/login.php';
        </script>";
    } else {
        
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='../../view/usuario.php';
        </script>";
    }
} if (isset($_POST['cpf']) && isset($_POST['senha'])) {

    $con = new Connection();
    $usuario = new Usuario();
    $usuario->cpf = $_POST['cpf'];
    $usuario->senha = $_POST['senha'];

    if ($usuario->valida()) {
       //$_SESSION['usuario'] = $usuario->id;
         $_SESSION['usuario'];
        


        echo "<script language='javascript' type='text/javascript'>
        window.location.href='../../view/';
        </script>";

    } else {
        $_SESSION["usuario"] = 0;
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='../../view/login.php';
        </script>";

    }
 }
}