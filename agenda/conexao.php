<?php
    $hostname = "localhost";
    $port = 3307;
    $username = "root";
    $password = "";
    $database = "agenda";
    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    if(mysqli_connect_errno()){
        printf("Erro ao conectar ao banco de dados: %s\n", mysqli_connect_error());
        exit;

    }
    echo "conectado";
   //Script php responsável pela conexão com o banco de dados denominado Lista6

?>
