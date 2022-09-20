<?php
date_default_timezone_set('America/Sao_Paulo');

require_once('PHPMailer.php');
require_once('SMTP.php');
require_once('Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nome = isset($_POST['nome']) ? $_POST['nome'] : 'Não informado';
$email = isset($_POST['email']) ? $_POST['email'] : 'Não informado';
$mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : 'Não informado';
$assunto = isset($_POST['assunto']) ? $_POST['assunto'] : 'Não informado';
$data = date('d/m/Y H:i:s');

if($email && $mensagem) {
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->Username = 'ticketclick0@gmail.com';
	$mail->Password = 'qmcwahiiliwnyhlv';
	$mail->SMTPSecure = 'tls';

	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;

	$mail->setFrom('ticketclick0@gmail.com');
	$mail->addAddress('ticketclick0@gmail.com');
	
	$mail->isHTML(true);
	$mail->Subject = $assunto;
	$mail->Body = "Nome: {$nome}<br>
				   Email: {$email}<br>
				   Mensagem: {$mensagem}<br>
				   Data/hora: {$data}";
	
	if($mail->send()) {
		echo "<script>location.href=\"contato.php\";alert('Email enviado com sucesso!')</script>";

	} else {
		echo "<script>location.href=\"contato.php\";alert('Email não enviado!')</script>";
	}
}  else {
	echo "<script>location.href=\"contato.php\";alert('Email não enviado: informar o email e a mensagem!')</script>";
}

?>