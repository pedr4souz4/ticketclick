<?php

  if(isset($_POST['button-cadastrar']))
  {
    // print_r('Nome: ' . $_POST['nome']);
    // print_r('<br>');
    // print_r('Email: ' . $_POST['email']);
    // print_r('<br>');
    // print_r('Celular: ' . $_POST['Phone']);
    // print_r('<br>');
    // print_r('Sexo: ' . $_POST['sexo']);
    // print_r('<br>');
    // print_r('CPF: ' . $_POST['CPF']);
    // print_r('<br>');
    // print_r('Data de Nascimento: ' . $_POST['data_nasc']);
    // print_r('<br>');
    // print_r('CEP: ' . $_POST['cep']);
    // print_r('<br>');
    // print_r('Endereço: ' . $_POST['endereco']);
    // print_r('<br>');
    // print_r('Bairro: ' . $_POST['bairro']);
    // print_r('<br>');
    // print_r('Número: ' . $_POST['numero']);
    // print_r('<br>');
    // print_r('Cidade: ' . $_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado: ' . $_POST['estado']);
    // print_r('<br>');
    // print_r('Senha: ' . $_POST['senha']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['Phone'];
    $cpf = $_POST['CPF'];
    $cnpj = $_POST['CNPJ'];
    $data_nasc = $_POST['data_nasc'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro_organizador(nome,email,celular,cpf,cnpj,data_nasc,cep,endereco,bairro,numero,complemento,cidade,estado,senha) 
    VALUES ('$nome','$email','$celular','$cpf','$cnpj','$data_nasc','$cep','$endereco','$bairro','$numero','$complemento','$cidade','$estado','$senha')");

    // header('Location: teste_login.php');

    // echo "Cadastro realizado com sucesso";

	echo "<script>alert('Cadastro efetuado com Sucesso!');location.href=\"login.php\";</script>";
    
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastre-se</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" sizes="250x100" href="icons/logo.ico">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v2/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v2/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v2/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v2/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v2/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v2/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v2/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v2/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v2/css/main.css">
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
<!--===============================================================================================-->
</head>
<body>
    <header>
        <nav>
            <ul class="nav">
            <li class="nav-item">
                <a class="btn btn-primary" href="index.php">Voltar</a>
            </li>
            </ul>
          </nav> 
    </header>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="cadastro_organizador.php" method="POST" id="login-form" class="login100-form validate-form">

					<span class="login100-form-title p-b-26">
						Torne-se um organizador de eventos!
					</span>

                    <center><div>
						<img class="rounded-circle me-2" sizes="70" height="70" src="img/logo.png">
					</div></center><br>

					<!-- <div>
						<img class="rounded-circle col-sm-4" sizes="90" height="60" src="icons/ticket.ico">
					</div> -->

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nome" id="nome" required>
						<span class="focus-input100" data-placeholder="Nome Completo*"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="email" name="email" id="email">
						<span class="focus-input100" data-placeholder="Email*"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="Phone" name="Phone" id="Phone" required maxlength="16">
						<span class="focus-input100" data-placeholder="Celular*"></span>
					</div>

                    <div class="form-group">
                        <label for="conta" class="">Tipo de conta*</label><br>
                        <select class="form-check" name="conta" id="conta" onchange="toggleEmailErrors()">
                            <option value="-1" disabled="true">Tipo de conta</option>
                            <option value="CPF">CPF</option>
                            <option value="CNPJ">CNPJ</option>
                        </select>
                    </div>

					<div id="CPF" class="wrap-input100">
						<input class="input100" type="text" name="CPF" id="CPF">
						<span class="focus-input100" data-placeholder="CPF*"></span>
					</div>

                    <div id="CNPJ" class="wrap-input100">
						<input class="input100" type="text" name="CNPJ" id="CNPJ">
						<span class="focus-input100" id="CNPJ" data-placeholder="CNPJ*"></span>
					</div>

                    <div class="wrap-input100 validate-input"><br>
						<input class="input100" type="date" name="data_nasc" id="data_nasc" required>
						<span class="focus-input100" data-placeholder="Data de Nascimento*"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="cep" id="cep" required maxlength="9" onblur="pesquisacep(this.value);">
						<span class="focus-input100" data-placeholder="CEP*"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="endereco" id="endereco" required>
						<span class="focus-input100" data-placeholder="Rua*"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="bairro" id="bairro" required>
						<span class="focus-input100" data-placeholder="Bairro*"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="numero" id="numero" required>
						<span class="focus-input100" data-placeholder="Número*"></span>
					</div>

                    <div class="wrap-input100">
						<input class="input100" type="text" name="complemento" id="complemento">
						<span class="focus-input100" data-placeholder="Complemento"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="cidade" id="cidade" required>
						<span class="focus-input100" data-placeholder="Cidade*"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="estado" id="estado" required>
						<span class="focus-input100" data-placeholder="Estado*"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="senha" id="senha">
						<span class="focus-input100" data-placeholder="Senha*"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="button-cadastrar">
								Cadastrar
							</button>
						</div>
					</div>

					<div class="text-center p-t-30">
						<span class="txt1">
							Já possui uma conta?
						</span>

						<a class="txt2" href="login.php">
							Clique aqui
						</a>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="Login_v2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v2/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v2/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v2/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v2/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login_v2/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login_v2/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login_v2/js/main.js"></script>
<!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!--===============================================================================================-->
    <script src="js/tela_cadastro.js"></script>
<!--===============================================================================================-->
	<script src="js/login.js"></script>
</body>
</html>