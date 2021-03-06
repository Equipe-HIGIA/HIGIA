<!DOCTYPE html>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" viewport-fit="cover">
    <meta name="msapplication-tap-highlight" content="no">
       
    <!-- Links  -->

    <link href="css/tl.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="shortcut icon" href="img/logo.ico"/>
   <!--   -->

    <title>Hígia - Disposicao para a Saude</title>
</head>
<body class="bg-white">
    <!--  NavBar -->

    <nav class="navbar navbar-expand-lg  text-white bg-dark navbar-dark text-white  border-bottom shadow-sm mb-5 p-1" id="navbarToggleExternalContent">
  <div class="container-fluid">
  
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><img id="logohigia" src="/img/logo.png" width="25" height="35">
    </span>
  </button>

    <div class="collapse navbar-collapse centralizar" id="navbarNav">
      <ul class="navbar-nav text-white">

        <li class="nav-item">
          <a href="app/view/login.php" id="btnmenu" class="nav-link text-white fs-4 <?php if(basename($_SERVER['PHP_SELF']) == "login.php"){echo "active";}else{echo "";}?>" aria-current="page" >
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
          <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
          <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
          </svg>Login</a>
        </li>

        <li class="nav-item">
          <a  href="app/view/usuario.php" class="nav-link text-yellow fs-4  <?= (basename($_SERVER['PHP_SELF']) == "index.php")?"active":"";?>" >
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
          </svg>Cadastrar-se </a>
        </li>
    
        <li   class="nav-item">
          <a href="app/view/desenvolvedores.php" class="nav-link text-yellow fs-4  <?= (basename($_SERVER['PHP_SELF']) == "index.php")?"active":"";?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>Contato</a>
        </li></ul>
      </div>  
    </div>
    <div class="centralizar">
    <span id="frasemenu" class="navbar-text">
    DISPOSIÇÃO PARA A SAÚDE
    </span>
    </div>
    </nav>
    
    <!--   -->
    <div class="centralizar"> 
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active" data-bs-interval="10000" id="bgvid" >
     
  <img src="img/per.jpg" class="img-fluid" >

     </div>
     <div  class="carousel-item" data-bs-interval="10000" id="bgvi"> 
   
       <img src="img/jonathan-borba-kCVZIbOKztI-unsplash.jpg" class="img-fluid" alt="Responsive image">

     </div>
     <div  class="carousel-item" data-bs-interval="10000" id="bgv">
       
     <img src="img/jess-eddy-nnsyyS7Of_Q-unsplash.jpg" class="img-fluid" alt="Responsive image">

     </div>

  </div>
  </div>

<div class="bgvid container-fluid">
<a class="navbar-brand nav-link disabled text-white centralizar" href="index.php"><img id="logohigia" src="img/logo.png"  width="125" height="125"></a>
  <h1>Sempre pensando na sua saúde.

  </h1>
</div>

  </div>
  
  <!--   -->

<br><br><br><br>

    <!-- Textos -->



    <div class="d-flex">
  <!-- Image -->
  <img src="img/m.jpg" class=" img-fluid shadow mb-3 m-4" alt="Responsive image"  style=" height:550px; width:200%;" id="sda1">

  <!-- Body -->
  <div class="mb-2 m-1 p-1">
    <h5 class="fw-bold">
    SOBRE</h5>
    <h3>
    O aplicativo Higia, surgiu para auxiliar a todas as pessoas que precisam de um profissional de Educacao Fisica,
 que possa oferecer a assistência necessária, na busca por melhoria da saude.
 <br><br>Nos dias atuais, nota-se a dificuldade em encontrar tempo e disposição para cuidar da saúde.
 Diante disto, o sistema foi desenvolvido, visando encurtar a distância e intermediar o acesso entre profissional e cliente,
 de maneira prática e efetiva, gerando praticidade, trabalho, e saúde para ambos.
 <br><br>O Higia, ainda proporciona visibilidade aos profissionais que precisam de maior divulgação e ascensão do seu trabalho. 
 Pois, com este website, o portfólio do profissional estará disponível para milhares de potenciais clientes,
 através de filtros que buscam igualdade entre características básicas, pré-cadastrados por ambos usuários. 
</h3>
  </div>
</div>
<!-- Media object -->


<br><br><br><br>



<div class="d-flex">
  <!-- Image -->
  <img src="img/luis-vidal-FodEsaNZs48-unsplash.jpg" class=" img-fluid shadow mb-3 m-4" alt="Responsive image"  style=" height:300px; width:200%;" id="sda1">

  <!-- Body -->
  <div class="mb-2 m-1 p-1">
    <h5 class="fw-bold">
    Como funciona</h5>
    <h3>
    O Profissional de Educacao Fisica tera a oportunidade de utilizar o aplicativo, como uma alavanca para seu portfólio profissional.
  Tendo a chance de mostrar seu trabalho e encontrar clientes que buscam por alguém com as características e formações especificas que este, tem a oferecer. 
  O aplicativo irá trabalhar o marketing deste profissional, apresentando-o a milhares de potenciais clientes.
  Do outro lado, o cliente que busca pelo profissional ideal, que possa atender efetivamente suas necessidades, bastando buscar em nosso catalogo,
  especificando as opcoes desejadas.
</h3>
  </div>
</div>
<!-- Media object -->


<br><br><br><br>

<br><br>


  </h4>
</div>
 <br><br><br><br>


 <div class="d-flex">
  <!-- Image -->
  
  <img src="img/ivan-torres-SVITzHh1Cdg-unsplash.jpg" class=" img-fluid shadow mb-3 m-4" alt="Responsive image" style=" height:300px; width:150%;" id="sw">
  <!-- Body -->
  <div class="mb-2 m-1 p-1">
    <h5 class="fw-bold">
    Produto oferecido  
  </h5>
    <h3 >
    Oferecemos um sistema de cadastro e filtro de informações, visando comparar e apresentar dados úteis.
    Onde, se encontra o Profissional, que busca aumentar a visibilidade de seu portfólio profissional
    e novas oportunidades de trabalho e o Cliente que busca por melhoria da saúde. Nosso sistema, tem como base,
    facilitar o contato entre nossos usuários. 
  </h3>
  </div>
</div>
<!-- Media object -->

  <br><br><br><br>

  <br><br><br><br>


  <br><br><br><br>

  

  


       <br><br><br><br>
       <div class="centralizar"><img src="img/logoextendida.png" class="img-fluid" alt="Responsive image"></div>
       <br><br>

      <div id="divbtn">
        <h2 alt="Responsive image">Participe dessa experiência.</h2>
      </div>
      <div id="divbtn">
        <a id="btncadastro" class="nav-item nav-link  text-dark btn rounded-pill btn-outline-warning " href="app/view/usuario.php" role="button">Cadastre-se já</a>
      </div>



    <!-- Final -->

  </div>
  <div class="card-group bg-dark ">
    <p id="copyright">
      © 2021 Higia - Disposicao para a Saude | Projeto TCC
 </p>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
<script sc="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="js/index.js"></script>
  

</body>
</html>