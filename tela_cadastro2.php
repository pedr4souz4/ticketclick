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

    header('Location: teste_login.php');
    
  }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link href="css/cadastro.css" rel="stylesheet">
        <link rel="shortcut icon" sizes="250x100" href="icons/ticket.ico">
        <link rel="stylesheet" href="login.php">
        <link rel="stylesheet" href="index.php">
        <link rel="stylesheet" href="tela_cadastro.php">
        <link rel="stylesheet" href="config.php">

        <title>Cadastre-se</title>

    </head>
    <header>
        <nav>
            <ul class="nav">
            <li class="nav-item">
                <a class="btn btn-primary me-2" href="index.php">Voltar</a>
            </li>
            </ul>
          </nav> 
          <div class="title_loop">
              <div class="title" id="teste">Cadastre-se</div> 
          </div>
    </header>
    <body>
    <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6 form-floating">
                        <div id="login-box" class="col-md-12">
                            <form action="tela_cadastro2.php" method="POST" id="login-form" class="form">

                                <!-- <div class="form-check form-check-inline">
                                    <label for="convidado" class=""><span>Torne-se um usuário</span> <span><input id="convidado_check" name="remember-me" type="radio" required></span></label><br>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label for="organizador" class=""><span>Torne-se um organizador</span> <span><input id="organizador_check" name="remember-me" type="radio" required></span></label><br>
                                </div> -->

                                <section class="boxLogin container">
                                <div class="content">
                                <div class="form-group" >
                                    <label for="nome" class="">Nome Completo*</label><br>
                                    <input type="text" name="nome" id="nome" placeholder="Nome" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="Email" class="">Email*</label><br>
                                    <input type="email" name="email" id="email" placeholder="E-mail" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="Phone">Celular*</label><br>
                                    <input class="form-control phone" type="text" name="Phone" id="Phone" placeholder="(__) _ ____-____"  required maxlength="16">
                                </div>
                                    <br>

                                <div class="form-group">
                                    <label for="sexo" class="">Tipo de conta*</label><br>
                                    <select class="form-check" name="sexo" id="sexo">
                                        <option value="-1" disabled="true">Tipo de conta</option>
                                        <option value="Masculino">CPF</option>
                                        <option value="Feminino">CNPJ</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="CPF" class="">CPF*</label><br>
                                    <input type="text" name="CPF" id="CPF" placeholder="___.___.___-__" class="form-control" required maxlength="11">
                                </div>

                                <div class="form-group">
                                    <label for="CNPJ" class="">CNPJ*</label><br>
                                    <input type="text" name="CNPJ" id="CNPJ" placeholder="___.___.___-__" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="data_nasc" class="">Data de Nascimento*</label><br>
                                    <input type="date" name="data_nasc" id="data_nasc" placeholder="Data de Nascimento" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="cep" class="">CEP*</label><br>
                                    <input type="text" name="cep" id="cep" placeholder="__.___-___" class="form-control" required maxlength="9" onblur="pesquisacep(this.value);">
                                </div>

                                <div class="form-group">
                                    <label for="endereco" class="">Rua*</label><br>
                                    <input type="text" name="endereco" id="endereco" placeholder="Rua" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="bairro" class="">Bairro*</label><br>
                                    <input type="text" name="bairro" id="bairro" placeholder="Bairro" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="numero" class="">Número*</label><br>
                                    <input type="text" name="numero" id="numero" placeholder="Número" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="complemento" class="">Complemento</label><br>
                                    <input type="text" name="complemento" id="complemento" placeholder="Complemento" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="cidade" class="">Cidade*</label><br>
                                    <input type="text" name="cidade" id="cidade" placeholder="Cidade" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="estado" class="">Estado*</label><br>
                                    <input type="text" name="estado" id="estado" placeholder="Estado" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="senha" class="">Senha*</label><br>
                                    <input type="password" name="senha" id="senha" placeholder="Senha" class="form-control" required minlength="8">
                                </div>
                                
                                <div class="form-group"><br>
                                  <input type="submit" name="button-cadastrar" class="btn btn-info btn-md" value="Cadastrar">
                                </div>
                                </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script src="js/tela_cadastro.js"></script>
    </body>
</html>
