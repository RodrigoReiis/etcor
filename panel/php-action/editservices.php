<?php

//Conexão
session_start();
require_once('db_connect.php');


if(isset($_POST['btn-editarservicos'])){


    $tituloareaservico = mysqli_escape_string($connect, $_POST['titulo_areaservico']);
    $subtituloareaservio = mysqli_escape_string($connect, $_POST['subtitulo_areaservico']);
    $imagemservico = 
    $tituloservico = mysqli_escape_string($connect, $_POST['titulo_servico']);
    $textoservico = mysqli_escape_string($connect, $_POST['texto_servico']);


    $sql = "INSERT INTO services (titleareaservices, subtitleareaservices, titleservices, textservices) VALUES ('$tituloareaservico', '$subtituloareaservico', '$tituloservico', '$textoservico')";

    if(mysqli_query($connect, $sql)){

        $_SESSION['mensagem'] = "Dados Atualizados com Sucesso";
        header('Location: ../servicos.php');
        die();

    } else {

        $_SESSION['mensagem'] = "Erro ao inserir dados. :(";
        header('Location: ../servicos.php');
        die();

    }

}


?>





