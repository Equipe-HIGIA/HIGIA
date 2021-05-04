<?php

session_start();

require_once("../backend/db/connection.class.php");


$servico = "%".trim($_GET['servico']."%");


$pdo = new Connection();

$st = $pdo->prepare('SELECT * FROM profissional WHERE servico LIKE :servico ');

$st->bindParam(':servico', $servico ,PDO::PARAM_STR);

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

</head>
<body class="bg-white">
    
<header>

<?php include 'include/header.php'; ?>
  
  

<button class="btn  btn-outline-warning btn-lg botao-volta shadow-sm m-2 rounded" onclick="window.history.back()"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>Voltar</button>
</header>

<br>


<main>

<h1 class="fs-1 m-4 text-center">Resultado da busca</h1>

<?php
if (count($resultados)) {
	foreach($resultados as $Resultado) {
?>



<div class="container">
  <div class="row justify-content-center">
<div class="card border-dark shadow-lg  mb-5  rounded" >
  <div class="card-header m-6"><?php echo $Resultado['qualificacao']; ?></div>
  <div class="card-body text-dark">
    <h5 class="card-title">Descrição do serviço</h5>
    <p class="card-text fs-5"><?php echo $Resultado['servico']; ?></p>
  
    
 
<div class="d-flex">

  <form name="contactform" method="post" action="dados_anucio.php">



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mx-auto mb-3"  name="enviar2" id="enviar<?php echo $Resultado['id']; ?>"  data-bs-toggle="modal" data-bs-target="#e<?php echo $Resultado['id']; ?>">
  Contato
</button>

<input type="hidden" id="pegaid" name="meu_id" value="<?php    echo $Resultado['id']; ?>">

</form>  

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#com<?php echo $Resultado['id']; ?>" style="width: 200px;">
  Comentario
</button>

</div>


<!-- Modal -->
<div class="modal fade" id="com<?php echo $Resultado['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-xxl-down">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title" id="exampleModalLabel">
    Comentarios

 

     <form action="../backend/controller/comentario.php" method="POST"  enctype="multipart/form-data">

  
<div id="rateYo<?php echo $Resultado['id']; ?>" class="mb-3"></div>

<input type="hidden" id="rating" name="rating" >


         <div class="form-floating mb-4">
  <textarea class="form-control" name="comentario" id="floatingTextarea"></textarea><input type="hidden" name="moderador" value="não" />
  <label for="floatingTextarea">Fazer comentario</label>
        </div>
        <input class="btn btn-primary" type="submit" name="Enviar" value="Submit">

     </form>

</div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body mb-4 shadow-sm">
     
     
<?php
$sql = "SELECT id, nota, comentario, data FROM cliente_profissional where moderador = 'sim' ORDER BY data DESC";
$sql = $pdo->query($sql);
?>


<?php    

if($sql->rowCount() >= 1){
    foreach($sql->fetchAll() as $mensagem):
      //foreach($sql->fetchColumn(5) as $mensagem):
      
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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

  


  <div class="card-footer bg-transparent border-dark">
    <div class="d-flex " >
    <h6><span class="badge rounded-pill bg-secondary"><?php echo $Resultado['ambiente']; ?></span></h6>
  <h6><span class="badge rounded-pill bg-secondary"><?php echo $Resultado['localatendimento']; ?></span></h6>
  <h6><span class="badge rounded-pill bg-secondary"><?php echo $Resultado['especial']; ?></span></h6>
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
 
$("#rating").val(rating);
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
   url:"dados_anucio.php",
   type:"POST",
   data:({ enviar2:$("button[name='enviar2']").val(), meu_id:$("input[name='meu_id']").val()}),
   beforeSend: function(data){ 

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



</main>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


</body>
</html>
