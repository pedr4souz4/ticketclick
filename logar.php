<?php
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

        require 'conexao.php';
        require 'Usuario_class.php';

        $u = new Usuario();

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        if($u->login($email, $senha) == true) {
            if(isset($_SESSION['idUser'])) {
                echo "<script>location.href=\"index_convidado.php\";alert('Bem vindo!');</script>";  
            }else{
                echo "<script>location.href=\"login_convidado.php\";alert('E-mail ou senha incorretos!');</script>"; 
            }
        }else{
            echo "<script>location.href=\"login_convidado.php\";alert('E-mail ou senha incorretos!');</script>"; 
        }
    }
?>