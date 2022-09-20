<?php

    //Localhost

    $localhost = "localhost";
    $user = "root";
    $passw = "";
    $banco = "TicketClick";

    global $pdo;

    try {
        $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
        echo "ERRO: ".$e->getMessage();
        exit;
    }

    // Servidor Web

    // session_start();

    // $localhost = "localhost";
    // $user = "id17849710_pedr4_souz4";
    // $passw = "I&cV46W^s8tFsGO#";
    // $banco = "id17849710_controle_de_convidados";

    // global $pdo;

    // try {
    //     $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    // } catch(PDOException $e) {
    //     echo "ERRO: ".$e->getMessage();
    //     exit;
    // }
?>