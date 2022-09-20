<?php

    include('config.php');

    if(isset($_POST['ok'])) {

        $email = $conexao->escape_string($_POST['email']);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>location.href=\"senha.php\";alert('E-mail inválido.')</script>";
        }

        $sql_code = "SELECT * FROM cadastro_convidado WHERE email = '$email'
        union SELECT * FROM cadastro_convidado WHERE email = '$email'";
        $sql_query = $conexao->query($sql_code) or die($conexao->error);
        $dado = $sql_query->fetch_assoc();
        $total = $sql_query->num_rows;

        if($total == 0) 
            echo "<script>location.href=\"senha.php\";alert('O e-mail informado não existe no banco de dados.')</script>";

        if(is_countable($conexao) == 0 && $total > 0) {

            $novasenha = substr(md5(time()), 0, 6);
            $nscriptografada = md5(md5($novasenha));
            
        }

            // Teste para localhost
            // if(mail($email, "Sua nova senha", "Sua nova senha: ".$novasenha)) {
                
            //     $sql_code = "UPDATE cadastro_convidado SET senha = '$nscriptografada' WHERE email = '$email'
            //                  union
            //                  UPDATE cadastro_organizador SET senha = '$nscriptografada' WHERE email = '$email'";
            //     $sql_query = $conexao->query($sql_code) or die($conexao->error); 

            //     if($sql_query)
            //         echo "Senha alterada com sucesso!";

            // }

            //Funcionamento para Web (phpMyAdmin)
            if(1 == 1) {
                
                $sql_code = "UPDATE cadastro_convidado SET senha = '$nscriptografada' WHERE email = '$email'
                             union UPDATE cadastro_organizador SET senha = '$nscriptografada' WHERE email = '$email'";
                $sql_query = $conexao->query($sql_code) or die($conexao->error); 

                if($sql_query)
                    echo "<script>location.href=\"login.php\";alert('Senha alterada com sucesso!')</script>";

            }
        }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon"  sizes="250x100" href="icons/logo.ico">
    <link href="css/senha.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <header class="menu-nav">
			<nav class="container navbar navbar-expand-md navbar-dark">
				<a href="index.php" class="navbar-brand">
				<img src="img/ticketclick.svg" alt="TicketClick">
				</a>
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir Navegação">
				<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
					<a class="nav-link" href="sobre.html">Sobre</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="cadastro_convidado.php">Inscrever-se</a>
					</li>
					<li class="nav-item">
					<a class="btn-menu btn ml-md-2" href="cadastro_organizador.php">Seja um organizador</a>
					</li>
				</ul>
				</div>  
			</nav>
		</header>

    <body>
        <form class="teste" method="POST" action="senha.php">
        <input placeholder="Seu e-mail" name="email" id="email" type="text">
        <input class="teste" name="ok" value="ok" type="submit">
        </form>
    </body>
</html>