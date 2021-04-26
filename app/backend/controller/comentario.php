<?php

require_once("../db/Connection.class.php");
require_once("../model/comentario.class.php");


if(isset($_POST['Enviar'])){

    $con = new Connection();
    
    $dados = new ComentarioNotas();
    $dados->comentario = $_POST['comentario'];
    $dados->nota = $_POST['rating'];
   
    $dados->ComentaNota();
    
    echo "<script language='javascript' type='text/javascript'>
    window.location.href='../../view/';
    </script>";
    }


?>