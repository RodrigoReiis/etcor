<?php


    $servername = "localhost";
    $user = "root";
    $pass = "root";
    $db = "etcor";


    $connect = mysqli_connect($servername, $user, $pass, $db);
    mysqli_set_charset($connect, "utf8");


    if(mysqli_connect_error()){

        echo "Erro de Conexão com o Banco de Dados".mysqli_connect_error();

    };

?>