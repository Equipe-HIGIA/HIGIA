<?php
session_start();

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



            <div class="card rounded-3 border-warning shadow-lg mb-3 position-absolute top-50 start-50 translate-middle"style="max-width: 48rem;">

                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="..." alt="...">
                    </div>
                    <div class="col-md-8">

                        <div class="card-body">
                            <h5 class="card-title"><?php  echo"Nome: ". $_SESSION["usuarionome"]; ?></h5>
                            <p class="card-text">

                                <br><?php
   echo "CEP: ". $_SESSION["usuariocep"];
?> <br><?php
echo "ID: ". $_SESSION["usuario"];
?>
<br><?php
 echo "Cidade: ". $_SESSION["usuariocidade"];
    ?><br><?php
    echo "Endereço: ". $_SESSION["usuarioendereco"];
       ?><br>
                             </p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
     

    </main>

    <footer>
    <button class="btn btn-primary position-absolute top-50 end-0 translate-middle-y m-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Sistema<span class="badge bg-secondary"><?php
       echo $_SESSION['usuarionotificacao'];
          ?></span></button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Sistema </h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">notificações<span class="badge bg-secondary"><?php
       echo $_SESSION['usuarionotificacao'];
          ?></span></button>
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

<!-- Full screen modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
<div class="modal-dialog modal-fullscreen-xxl-down">
<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
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