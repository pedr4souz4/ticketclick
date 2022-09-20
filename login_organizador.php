<!DOCTYPE html>
<html lang="en">
	<head>
		<title>TicketClick - Login Organizador</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" sizes="250x100" href="icons/icone-ticket.ico">

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
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="Login_v2/css/main.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" href="css/bootstrap.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" href="css/login.css">
		<script>
		function goBack() {
			window.history.back()
		}
		</script>
	<!--===============================================================================================-->

	</head>
	<body>
		<div class="limiter">
		<a class="btn-menu btn ml-md-2" href="#organizador" onclick="goBack()">Voltar</a>
			<div class="container-login100">
				<div class="wrap-login100">
					<form action="logar2.php" method="POST" id="login-form" class="login100-form validate-form">
						<span class="login100-form-title p-b-26">
							Login
						</span>

						<center><a href="index.php">
						<img class="rounded-circle me-2" sizes="900" height="70" src="img/ticketclick.svg" alt="TicketClick">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir Navegação">
						</button></center>

						<div class="wrap-input100 validate-input" data-validate = "Válido email é: a@b.c">
							<input class="input100" type="email" name="email" id="email">
							<span class="focus-input100" data-placeholder="Email"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Entre com a senha">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="password" name="senha" id="senha">
							<span class="focus-input100" data-placeholder="Senha"></span>
						</div>

						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button id="id" class="login100-form-btn" name="submit" type="submit">
									Login
								</button>
							</div>
						</div>

						<div class="text-center p-t-30">
							<span class="txt1">
								Esqueceu a senha?
							</span>

							<a class="txt2" href="senha/pags/recuperar.php">
								Clique aqui
							</a>

						<div class="text-center p-t-100">
							<span class="txt1">
								Não possui uma conta?
							</span>

							<a class="txt2" href="cadastro_organizador.php">
								Cadastre-se
							</a>
						</div>
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
	<script src="js/jquery-3.6.0.min.js"></script>		
<!--===============================================================================================-->
	<script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
	<!--===============================================================================================-->

	</body>
</html>