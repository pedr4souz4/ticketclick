<?php

    // Funcionamento para Web (phpMyAdmin)
    // $dbHost = 'localhost';
    // $dbUsername = 'id17849710_pedr4_souz4';
    // $dbPassword = 'I&cV46W^s8tFsGO#';
    // $dbName = 'id17849710_controle_de_convidados';

    //Funcionamento para localhost (xamp)

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'TicketClick';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conexao->connect_error)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso!";
    // }


?>