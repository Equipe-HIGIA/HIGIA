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
   <link href="css/jquery-filestyle.min.js">


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

        <div class="container-md">

       
    <button type="button" class="btn btn-outline-warning btn-lg  shadow p-1 m-1" data-bs-toggle="modal" data-bs-target="#perfil">Mudar de imagem</button>
 
        <div class="container">
    <div class="position-relative">
    <div class="position-absolute top-0 start-0 rounded-circle">
    <?php if( $_SESSION['usuarioidentificacao_perfil'] == 0){ ?>

    <img src="../backend/controller/imagemPerfil/índice.jpg" class="d-block w-100 img-fluid  border  border-3 rounded  shadow" style=" height: 190px;">
    <?php }else{?><img src='../backend/controller/<?php echo $_SESSION['usuarioimagens'];?>' class='d-block w-100 img-fluid  border  border-3 rounded  shadow' alt='...'  style=" height: 190px;    ">
      <?php   } ?>

    

      <h5 class="card-title fs-2 m-2"><?php  echo $_SESSION["usuarionome"]; ?></h5>
   
<!-- Modal -->
<div class="modal fade" id="perfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../backend/controller/fotoPerfil.php" method="post" enctype="multipart/form-data"> 
      <div class="modal-body">
     
 <div class="mb-3">
 <label for="imagem" class="form-label">Imagem para Perfil</label>
    <input type="file" class="form-control" aria-label="file example" name="imagem" required>
     </div>

     <input  id="pegaridop" type="hidden" name="identificacao_perfil" value="<?php    echo $_SESSION['usuario']; ?>">



      </div>
      <div class="modal-footer">
         <button type="submit" class="btn btn-primary">Savar mudança</button>
      </div>
      </form>
    </div>
  </div>
</div>


     </div>

    </div>
    
</div>


        <div class="card text-center rounded-3 border border-2  shadow-lg mb-3 position-absolute top-50 start-50 translate-middle"style="max-width: 18rem;">
  <div class="card-header border-0">
    <ul class="nav nav-pills card-header-pills border-0">
      <li class="nav-item">
      
<?php if( $_SESSION['usuarionotificacao'] == 0){ ?>
        <button class="btn btn-primary m-3 nav-link active position-relative" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Sistema<span class="badge bg-secondary position-absolute top-0 start-100 translate-middle border border-light  rounded-circle p-2">
        
        <span class='visually-hidden'>unread messages</span>
  
          </span></button>
 <?php }else{echo" <button class='btn btn-primary m-3 nav-link active position-relative' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasRight' aria-controls='offcanvasRight'>Sistema
<span class='badge bg-danger position-absolute top-0 start-100 translate-middle border border-light  rounded-circle p-2'>
<span class='visually-hidden'>unread messages</span></span>  
</button>"
        
       ;} ?>



<?php if( $_SESSION['usuarioidentificacao_anucio'] == 0){ ?>

  <div class="alert alert-warning d-flex align-items-center" role="alert">
      <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg><div>
   para ver atualização de anuncio precisa cadastrar o seu anuncío caso tenha feito faça o login novamente
  </div>
</div>

<?php }else{echo"<button class='btn btn-primary' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasWithBothOptions' aria-controls='offcanvasWithBothOptions'>Atualizar Anuncio</button>
";} ?>





      </li>
    
    </ul>
  </div>
  <div class="card-body">
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

<input  id="pegaridop" type="hidden"  name="identificacao_anucio" value="<?php    echo $_SESSION['usuarioidentificacao_anucio']; ?>">


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
    <button type="submit" name="enviar_atualizar" class="btn btn-primary">atualizar</button>
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
  
<?php if( $_SESSION['usuarionotificacao'] == 0){ ?>
  <button class="btn btn-primary  position-relative mb-2 p-2 m-3" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">notificações

  <span class="badge bg-secondary position-absolute top-0 start-100 translate-middle  border border-light  rounded-circle p-2">
  <span class='visually-hidden'>unread messages</span></span>  
       </span>
          
       </button>   
          <?php }else{echo"<button class='btn btn-primary position-relative mb-2 p-2 m-3' type='button' data-bs-toggle='collapse' data-bs-target='#multiCollapseExample2' aria-expanded='false' aria-controls='multiCollapseExample2'>notificações

<span class='badge bg-danger position-absolute top-0 start-100 translate-middle border border-light  rounded-circle p-2'>
<span class='visually-hidden'>unread messages</span></span>  
</button>"
        
       ;} ?>


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
  
   </div>
</div>

  <div class="row">
  <div class="col">
    <div class="collapse multi-collapse border-0" id="multiCollapseExample2">
      <div class="card card-body border-0">
     <?php
      $idnotificacao =  $_SESSION['usuarionotificacao'];

     $notificacao = "SELECT id, notificacao FROM notificacao where identificacao_notifcacao =  '$idnotificacao' ";
     $notificacao = $pdo->query($notificacao);
          ?>

<?php
if($notificacao->rowCount() >= 1){
  foreach($notificacao->fetchAll() as $contato):
    
    ?>

<div class="shadow mb-4 border border-2" data-bs-spy="scroll">


<div class="d-flex">
<p class="m-2 text-center rounded"><strong class="text-center" ><?php echo $contato['notificacao']; ?></strong></p> <br>
<hr>
<span class="badge bg-secondary m-2"><a  class="nav-link text-white" href='../backend/controller/exculirnotificacao.php?id=<?php echo $contato['id']; ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></a></span>
</div> 


</div>
    
<?php
  endforeach;
} else {
  echo "Ainda ninguem viu seu contato";
}
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



<div class="collapse border-0" id="collapseExample">
  <div class="card card-body">
 
  <?php
$idusuario = $_SESSION['usuarioidentificacao_anucio'];
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

    </div>




    </main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="js/jquery-filestyle.min.js"></script>

</body>

</html>