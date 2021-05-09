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
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Atualizar Anuncio</button>



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



<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">atualizar anuncio</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    
<form method="POST"  action="../backend/controller/atualização_anuncio.php"  >
<div class="mb-3">
  <label for="grupo" class="form-label">Quantas pessoas voce pode atender</label>
  <input type="number" class="form-control" name="grupo" placeholder="Quantidade de Pessoas">
</div>

<input  id="pegaridop" type="hidden" name="identificacao_anucio" value="<?php    echo $_SESSION['usuarioidentificacao_anucio']; ?>">


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
    <textarea class="form-control is-invalid" name="servico" placeholder="Descreva brevemente, os seus serviços." required></textarea>
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


 <div class="col-12">
    <button type="submit" name="enviar2" class="btn btn-primary">atualizar</button>
  </div>
  </form></div>
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

  <button class="btn btn-primary p-2 m-2 mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#post" aria-expanded="false" aria-controls="post">
    Seu Anuncio
  </button>
  
</p>
<div class="collapse" id="post">
  <div class="card card-body">
  <h3>Serviço</h3>
   <p><?php echo $_SESSION['usuarioserviço']; ?></p>
   <h3>especialidade</h3>
  <p> <?php echo $_SESSION['usuarioespecialidade']; ?></p>
  <h3>ambiente</h3>
  <p> <?php echo $_SESSION['usuarioambiente']; ?></p>
  <h3>qualificacao</h3>
  <p><?php echo $_SESSION['usuarioqualificacao']; ?></p>
  <h3>localatendimento</h3>
  <p><?php echo $_SESSION['usuariolocalatendimento']; ?></p>
  <h3>paginas</h3>
  <p><?php echo $_SESSION['usuariopaginas']; ?></p>
  <h3>raio</h3>
  <p><?php echo $_SESSION['usuarioraio']; ?></p>
  <h3>idade</h3>
  <p><?php echo $_SESSION['usuariodades']; ?></p>

  
   </div>
</div>

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


<div class="collapse" id="editarpost" >
  <div class="card card-body" data-bs-spy="scroll">
 
   </div>
</div>



<div class="collapse" id="collapseExample">
  <div class="card card-body">
 
  <?php
$idusuario = $_SESSION['usuario'];
$sql = "SELECT id, nota, comentario, data FROM cliente_profissional where moderador = 'não' AND identificacao =  '$idusuario' ORDER BY data DESC";
$sql = $pdo->query($sql);
?>

<?php
if($sql->rowCount() >= 1){
  foreach($sql->fetchAll() as $mensagem):
    
    ?>

<div class="shadow mb-4 border" data-bs-spy="scroll">



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