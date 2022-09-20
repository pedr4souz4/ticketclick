<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon"  sizes="250x100" href="../../icons/logo.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">

    <Title>Alterar senha</Title>

	</head>
	<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="row">
		<div class="col-sm-6 offset-md-3">
			<form method="POST">
				<h4>INSIRA A SUA NOVA SENHA</h4>
				<hr>
				<label>Digite sua nova senha</label>
				<input type="password" name="senha" class="form-control" required><br>

				<input type="submit" value="Efetuar Alterações" class="btn btn-outline-success btn-lg btn-block">
				<input type="hidden" name="env" value="upd">
			</form>
		</div>
	</div>
			
		<?php include_once("../lib/functions.php");
		verifica_rash($conexao, $_GET['rash'], $_POST['senha']);?>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</body>
</html>

