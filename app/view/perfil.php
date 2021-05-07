<?php
session_start();
require_once("../backend/db/connection.class.php");
$pdo = new Connection();

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
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 


</head>

<body class="bg-white">




    <header>
        <?php include 'include/header.php'; ?>
    </header>
    <br><br>

    <main>

        <div class="container-md">

        <div class="card text-center rounded-3 border-warning shadow-lg mb-3 position-absolute top-50 start-50 translate-middle"style="max-width: 18rem;">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <button class="btn btn-primary m-3 nav-link active" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Sistema<span class="badge bg-secondary"><?php
       echo $_SESSION['usuarionotificacao'];
          ?></span></button>

      </li>
    
    </ul>
  </div>
  <div class="card-body">
  <h5 class="card-title"><?php  echo"Nome: ". $_SESSION["usuarionome"]; ?></h5>
                            <p class="card-text">

                                <br><?php
   echo "CEP: ". $_SESSION["usuariocep"];
?> <br><?php
echo "ID: ". $_SESSION['usuario'];
?>
<br><?php
 echo "Cidade: ". $_SESSION['usuariocidade'];
    ?><br><?php
    echo "Endereço: ". $_SESSION["usuarioendereco"];
       ?><br>
                             </p>
                        </div>
  </div>
</div>

    </main>

    <footer>
   
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Sistema </h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">notificações<span class="badge bg-secondary"><?php
       echo $_SESSION['usuarionotificacao'];
          ?></span></button>
          
<button class="btn btn-primary " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Administrar comentarios
  </button>
  <div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
      pessoas que viram o seu contato:<?php
       echo $_SESSION['usuarionotificacao'];
          ?>
      </div>
    </div>
  </div>
  
  </div>
</div>

</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
 
  <?php
$idtes = $_SESSION['usuario'];
$sql = "SELECT id, nota, comentario, data FROM cliente_profissional where moderador = 'não' AND identificacao_anucio =  '$idtes' ORDER BY data DESC";
$sql = $pdo->query($sql);
?>

<?php
if($sql->rowCount() >= 1){
  foreach($sql->fetchAll() as $mensagem):
    //foreach($sql->fetchColumn(5) as $mensagem):
    
    ?>

<div class="shadow mb-4 border">



<p class="m-2"><strong ><?php echo $mensagem['comentario']; ?></strong></p> <br>
<hr>
<p class="fw-light"><?php echo $mensagem['data']; ?></p>
<span class="badge bg-secondary m-2"><a  class="nav-link text-white" href='../backend/controller/liberarcomentario.php?id=<?php echo $mensagem['id']; ?>'>permitir comentario</a></span>
<span class="badge bg-secondary m-2"><a  class="nav-link text-white" href='../backend/controller/excluircomentario.php?id=<?php echo $mensagem['id']; ?>'>reprovar comentario</a></span>
   


</div>

<?php
  endforeach;
} else {
  echo "Não há mensagens.";
}
?>
 </div>
</div>
  </div>
</div>
    </footer>

    




    </main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>