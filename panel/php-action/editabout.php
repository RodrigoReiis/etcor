<?php

//DB Connect
session_start();
require_once('db_connect.php'); 

if(isset($_POST['btn-editar'])) {

    $titulo = mysqli_escape_string($connect, $_POST['titulo_sobre']);
    $subtitulo = mysqli_escape_string($connect, $_POST['subtitulo_sobre']);
    $texto = mysqli_escape_string($connect, $_POST['texto_sobre']);   

    $sql = "INSERT INTO about (subtitleabout, textabout, titleabout) VALUES ('$subtitulo', '$texto', '$titulo')";
    
    if(mysqli_query($connect, $sql)){

        $_SESSION['mensagem'] = "Dados Atualizados com Sucesso!";
        header('Location: ../sobrenos.php');
        die();

    } else

        $_SESSION['mensagem'] = "Erro ao Atualizar";
        header('Location:../sobrenos.php');
};


?>