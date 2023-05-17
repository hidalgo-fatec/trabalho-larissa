<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $base = "trabalho";

    $con = mysqli_connect($servidor, $usuario, $senha, $base);

    if (!$con){
        echo "Erro ao conectar o banco de dados. Erro 
             (".mysqli_connect_errno()."): ".mysqli_connect_error();
    }

?>