<?php

    include("config.php");

    if(isset($_POST['ok'])) {

        $email = $mysqli->escape_string($_POST['email']);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erro[] = "E-mail inválido.";
        }

        $result = mysqli_query($conexao, "INSERT INTO cadastro_convidado(nome,email,celular,sexo,cpf,data_nasc,cep,endereco,bairro,numero,complemento,cidade,estado,senha) 
        VALUES ('$nome','$email','$celular','$sexo','$cpf','$data_nasc','$cep','$endereco','$bairro','$numero','$complemento','$cidade','$estado','$senha')");

        if(count($erro) == 0) {

            $novasenha = substr(md5(time()), 0, 6);
            $nscriptografada = md5(md5($novasenha));
        }

            if(mail($email, "Sua nova senha", "Sua nova senha: ".$novasenha)) {
                
                $sql_code = "UPDATE cadastro_convidado SET senha = $nscriptografada WHERE email = '$email'";
                $sql_query = $mysqli->query($sql_code) or die($mysqli->error); 
            }
    }
?>
<html>
<head>
    <meta charset="utf-8">
</head>
    <body>
        <form action="senha.php">
        <input placeholder="Seu e-mail" name="email" id="email" type="text">
        <input name="ok" value="ok" type="submit">
        </form>
    </body>
</html>