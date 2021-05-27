<?php

session_start();

require_once("../backend/db/connection.class.php");


//$servico = "%".trim($_GET['servico']."%");
$servico =  str_replace( array( ',', '.', '%', '-', '/', '\\' ),' ',  $_GET['servico']);

$pdo = new Connection();

//$st = $pdo->prepare('SELECT * FROM profissional  WHERE servico LIKE :servico ');
//$st = $pdo->prepare('SELECT * FROM usuario u  left join profissional  p on(  p.identificacao_anucio = u.id)  WHERE servico LIKE :servico ');
 $st = $pdo->prepare("SELECT * FROM usuario u  left join profissional  p on(  p.identificacao_anucio = u.id) left join imagem im on(p.identificacao_anucio = im.identificacao_imagem)  WHERE servico LIKE '%$servico%'");

//$st->bindParam(':servico', $servico ,PDO::PARAM_STR);

$st->execute();  






$resultados = $st->fetchAll(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HÍGIA</title>


    
    <style> *{ font-family: "Baloo Tamma 2" !important;}
  
  
 </style>
   
   <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
  <link rel="shortcut icon" href="../../img/logo.ico"/>
  
</head>
<body class="bg-white">
  
<script>var i = setInterval(function () {
    
    clearInterval(i);
  
    // O código desejado é apenas isto:
    document.getElementById("loading").style.display = "none";
    document.getElementById("conteudo").style.display = "inline";

}, 4500);</script>

<header>

<?php include 'include/header.php'; ?>
  
  






<button class="btn  btn-outline-warning btn-lg botao-volta shadow-sm m-2 rounded" onclick="window.history.back()"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>Voltar</button>
</header>

<br>



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
<main>

<h1 class="fs-1 m-4 text-center">Resultado da busca</h1>


<?php
if (count($resultados)) {
	foreach($resultados as $Resultado) {
?>



<div class="container">
  <div class="row justify-content-center">
<div class="card  shadow-sm border border-3  mb-5  rounded" style=" width: 119rem;">
  <div class="card-header m-6 mb-2 bg-transparent border-0 fs-4"><?php echo $Resultado['qualificacao']; ?></div>
  <div class="d-flex">
  <div id="carouselExampleControls<?php echo $Resultado['id']; ?>" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner mb-3  shadow">
    <div class="carousel-item active mb-2 border border-3 shadow" data-bs-interval="10000">
      <img src="../backend/controller/<?php echo $Resultado['imagens']; ?>" class="d-block w-100 img-fluid" alt="...."  style=" height:300px; width:200%;" >
    </div>
    <div class="carousel-item mb-2 border border-3 shadow" data-bs-interval="10000">
    <img src="../backend/controller/<?php echo $Resultado['imagens_2']; ?>" class="d-block w-100 img-fluid" alt="..."  style=" height:300px; width:200%;" >
     </div>
    <div class="carousel-item mb-2 border border-3 shadow" data-bs-interval="10000">
    <img src="../backend/controller/<?php echo $Resultado['imagens_3']; ?>" class="d-block w-100 img-fluid" alt="..." style=" height:300px; width:200%;" >
     </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls<?php echo $Resultado['id']; ?>" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls<?php echo $Resultado['id']; ?>" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <div class="card-body text-dark mb-4 p-2">
    <h5 class="card-title">Descrição do serviço - <?php echo $Resultado['id']; ?></h5>
    <p class="card-text fs-5"><?php echo $Resultado['servico']; ?></p>

<div class="d-flex">
    <?php if($_SESSION['usuarioidentificacao_cliente'] == 0){ ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-warning  mb-3  border border-2 shadow-sm"  data-bs-toggle="modal" data-bs-target="#contatobloquedado<?php echo $Resultado['id']; ?>">
 contato
</button>


<?php }else{?>
  <form name="contactform" method="POST" action="../backend/controller/dados_anucio.php">
<button type="button" class="btn btn-outline-warning mx-auto mb-3 shadow-sm border border-2"  name="enviar<?php echo $Resultado['identificacao_anucio']; ?>" id="enviar<?php echo $Resultado['id']; ?>"  data-bs-toggle="modal" data-bs-target="#e<?php echo $Resultado['id']; ?>">
  Contato
</button>
<input type="hidden"  name="meu_id" value="<?php echo $Resultado['identificacao_anucio']; ?>"/>
</form>  <?php }?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-warning shadow-sm  border border-2 mb-3 " data-bs-toggle="modal" data-bs-target="#com<?php echo $Resultado['id']; ?>" style="width: 200px;">
  Comentario
</button>
</div>


<div class="d-flex flex-row-reverse position-absolute bottom-0 end-0 mb-2 p-2 m-1" >
    <h6><span class="badge rounded-pill bg-secondary"><?php echo $Resultado['ambiente']; ?></span></h6>
  <h6><span class="badge rounded-pill bg-secondary"><?php echo $Resultado['localatendimento']; ?></span></h6>
  <h6><span class="badge rounded-pill bg-secondary"><?php echo $Resultado['especial']; ?></span></h6>
  </div>

    </div>

 



<!-- Modal -->
<div class="modal fade" id="contatobloquedado<?php echo $Resultado['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert alert-warning d-flex align-items-center" role="alert">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg><div>
   você tem que fazer o cadastro de cliente</div>
</div>
      </div>
     
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="com<?php echo $Resultado['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-xxl-down">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title" id="exampleModalLabel">
    Comentarios

   <?php  $bloquear =  $Resultado['identificacao_anucio']; $bloquear2 = $_SESSION['usuarioidentificacao_anucio']; ?>
 
    
    

     
<?php if( $bloquear !== $bloquear2){ ?>


      <form action="../backend/controller/comentario.php" method="POST"  enctype="multipart/form-data">

  
<div id="rateYo<?php echo $Resultado['id']; ?>" class="mb-3"></div>

<input type="hidden" id="rating<?php echo $Resultado['id']; ?>" name="rating" >


         <div class="form-floating mb-4">
  <textarea class="form-control" name="comentario" id="floatingTextarea"></textarea>
  <input type="hidden" name="moderador" value="não" />
<input type="hidden" id="pegaridopost" name="identificacao" value="<?php    echo $Resultado['identificacao_anucio']; ?>">

  <label for="floatingTextarea">Fazer comentario</label>
        </div>
        <input class="btn btn-primary" type="submit" name="Enviar" value="Enviar comentario">

     </form>
     <?php }else{?><div class="alert alert-warning d-flex align-items-center" role="alert">
      <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg><div>
você não pode fazer comentario no seu proprio anuncío
  </div>
</div>   <?php   } ?>
</div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body mb-4 shadow-sm">
     
     <h5>obervação os comentario será enviada pelo profissional depois sera realizada  a postagem do comentario.</h5>
<?php

$idpost = $Resultado['id'];
$sql = "SELECT id, nota, comentario, data FROM cliente_profissional where moderador = 'sim' AND identificacao = $idpost  ORDER BY data DESC";
$sql = $pdo->query($sql);
?>


<?php    

if($sql->rowCount() >= 1){
    foreach($sql->fetchAll() as $mensagem):
      
      ?>

<div class="shadow mb-4 border">
<div class="rateYo-<?php echo $mensagem['id']; ?>"></div>

<script>
/* Javascript */
 
$(function () {
 
 $(".rateYo-<?php echo $mensagem['id']; ?>").rateYo({
   readOnly:true,
   rating: <?php echo $mensagem['nota']; ?>
 });

});
</script>


<p class="m-2"><strong ><?php echo $mensagem['comentario']; ?></strong></p>  <br>
<hr>
<p class="fw-light"><?php echo $mensagem['data']; ?></p>
       


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






</div>




<!-- Modal -->
<div class="modal fade" id="e<?php echo $Resultado['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $Resultado['nome']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p class="card-text fs-5">raio de atuação:<?php echo $Resultado['raio']; ?></p>
      <p class="card-text fs-5">Idade que atende:<?php echo $Resultado['idades']; ?></p>
      <p class="card-text fs-5">celular de contato:<?php echo $Resultado['celular']; ?></p>
      <p class="card-text fs-5">fixo de contato:<?php echo $Resultado['fixo']; ?></p>
      <p class="card-text fs-5">cidade:<?php echo $Resultado['cidade']; ?></p>
      <p class="card-text fs-5">paginas:<?php echo $Resultado['paginas']; ?></p>
    
      </div>
     
    </div>
  </div>
</div>

<div class="collapse mb-4" id="e<?php echo $Resultado['id']; ?>">
  <div class="card card-body">
  <p class="card-text fs-5">

      <p>Numeros de pessoa que consegue atender:<br> <?php echo $Resultado['grupo']; ?></p>
      <p>Raio que consegue atender:<br><?php echo $Resultado['raio']; ?></p>
      
      </p>
     </div>
</div>

  





</div>
</div>
</div>
  <br>


  <script>
/* Javascript */
 
$(function () {
 
 $("#rateYo<?php echo $Resultado['id']; ?>").rateYo({
   fullStar: true,
   onSet: function (rating, rateYoInstance) {
 
$("#rating<?php echo $Resultado['id']; ?>").val(rating);
}
 });

});

// Getter
var normalFill = $("#rateYo<?php echo $Resultado['id']; ?>").rateYo("option", "fullStar"); //returns "#A0A0A0"
 
// Setter
$("#rateYo<?php echo $Resultado['id']; ?>").rateYo("option", "fullStar", "#B0B0B0"); //returns a jQuery Element

</script>




  <script>

$("#enviar<?php echo $Resultado['id']; ?>").click(function(){
       
$.ajax({
   dataType:'html',
   url:"../backend/controller/dados_anucio.php",
   type:"POST",
   data:({  meu_id:$("input[name='meu_id']").val()}),
   beforeSend: function(data){ 
    //enviar2:$("button[name='enviar2']").val(),
}, success:function(data){
     
}, complete: function(data){}

});
});
</script>


<?php
} 

}
 else {
?>
<h1 class="fs-1 fw-bolder m-4  text-center position-absolute top-50 start-50 translate-middle">Não foram encontrados resultados pelo termo buscado.</h1>
<?php
}
?>

</div>

</main>






<script type="text/javascript">
$(document).ready(function(){
$("#limit-records").change(function(){
  $('form').submit();
})

})
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


</body>
</html>
