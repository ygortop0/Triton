<?php
    $host = 'triton.mysql.dbaas.com.br';
    $dbname = 'triton';
    $user = 'triton';
    $password = 'Triton2023@';

    $conexao = new mysqli($host, $user, $password, $dbname);

    if($conexao->connect_errno){
        echo "erro";
    }
    else{
        echo "";
    }

?>

