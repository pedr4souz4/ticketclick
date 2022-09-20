<?php
include_once("../../config.php");

    function verifica_dados($conexao){
        if(isset($_POST['env']) && $_POST['env'] == "form") {
            $email = addslashes($_POST['email']);
            $sql = $conexao->prepare("SELECT * FROM cadastro_convidado WHERE email = ?");
            $sql->bind_param("s", $email);
			$sql->execute();
			$get = $sql->get_result();
			$total = $get->num_rows;

            if($total > 0){
				$dados = $get->fetch_assoc();
                add_dados_recover($conexao, $email);

			}else{
               
			}
        }
    }

    function add_dados_recover($conexao, $email) {
        $rash = md5(rand());
        $sql = $conexao->prepare("INSERT INTO recover_solicitation (email, rash) VALUES (?, ?)");
        $sql->bind_param("ss", $email, $rash);
        $sql->execute();

        if($sql->affected_rows > 0) {
			enviar_email($conexao, $email, $rash);
		}
    }

    function enviar_email($conexao, $email, $rash) {
        $destinatario = $email;

		$subject = "Nova senha para a sua conta no site TicketClick";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "From: Your name <info@address.com>" . "\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		$message = "<html><head>";
		$message .= "
			<h1>Nova senha para a sua conta no site TicketClick</h1>
			<hr>
			<h3>Prezado usuário,<br></h3>
			<h3>Uma nova senha de acesso restrito ao site <br>http://www.ticketclick.ml foi solicitada <br>através da sua conta {$email}.</h3>
			<h3>Para definir uma nova senha, por favor, clique no link a seguir: <br><a href='".'http://ticketclick.ml/senha/pags/alterar.php'."?pagina=alterar&rash={$rash}'>".'http://ticketclick.ml/senha/pags/alterar.php'."?pagina=alterar&rash={$rash}</a></h3>
			<h3>Por motivos de segurança, o link será válido apenas por 10 <br>minutos e poderá ser usado uma única vez.</h3>
			<h3>Por favor, ignore este e-mail se você não solicitou uma nova senha.</h3>
			<hr>
			Atenciosamente, 
			Ticketclick.
		";

        $message .="</head></html>";

		if(mail($destinatario, $subject, $message, $headers)){
			echo "<br><div class='alert alert-success w-50 p-3 offset-md-3'>Os dados foram enviados para o seu email. Acesse para recuperar.</div>";
		}else{
			echo "<br><div class='alert alert-danger w-50 p-3 offset-md-3'>Erro ao enviar</div>".$sql->error;
		}
    }

    function verifica_rash($conexao, $rash){
		$sql = $conexao->prepare("SELECT * FROM recover_solicitation WHERE rash = ? AND status = 0");
		$sql->bind_param("s", $rash);
		$sql->execute();
		$get = $sql->get_result();
		$total = $get->num_rows;

		if($total > 0){
			if(isset($_POST['env']) && $_POST['env'] == "upd") {
			$nsenha = $_POST['senha'];

			$dados = $get->fetch_assoc();
			atualiza_senha($conexao, $nsenha, $dados['email']);
			deleta_rashs($conexao, $dados['email']);
			echo "<br><div class='alert alert-success w-50 p-3 offset-md-3'>Senha alterada com sucesso.</div>";
			redireciona("../../login.php");
			}
			}else{
				echo "<br><div class='alert alert-danger w-50 p-3 offset-md-3'>Rash inválida.</div>";
		}
	}

	function atualiza_senha($conexao, $email, $senha){
		$sql = $conexao->prepare("UPDATE cadastro_convidado SET senha = ? WHERE email = ?");
		$sql->bind_param("ss", $email, $senha);
		$sql->execute();

		if($sql->affected_rows > 0){
			return true;
		}else{
			return false;
		}
	}

	function deleta_rashs($conexao, $email){
		$sql = $conexao->prepare("DELETE FROM recover_solicitation WHERE email = ?");
		$sql->bind_param("s", $email);
		$sql->execute();

		if($sql->affected_rows > 0){
			return true;
		}else{
			echo $conexao->error;
		}
	}

	function redireciona($dir){
		echo "<meta http-equiv='refresh' content='3; url={$dir}'>";
	}

?>