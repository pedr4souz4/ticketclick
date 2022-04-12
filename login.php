<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon"  sizes="250x100" href="ticket.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <Title>TicketClick</Title>

  </head>
  <body>
    <header>
          <nav class="navbar navbar-light bg-dark">
              <div>
              <img sizes="90" height="60"src= "ticket.ico">
      
              <a class="navbar-brand text-white" href="index.php">TicketClick</a>
              
            </div>
            <ul class="nav">
            <li class="nav-item">
                    <a class="nav-link text-white" href="contato.php">Informativo</a>
                </li>

            <li class="nav-item">
                    <a class="nav-link text-white" href="contato.php">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="teste_cadastro.php">Acesse sua conta</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-outline-primary" href="tela_cadastro.php">Cadastre-se</a>
                </li>
            </ul>
          </nav>
    </header>
      <div id="login">
        <form action="testLogin.php" method="POST" id="login-form">
          <h3>Login</h3>
          <div>
            <div><label for="email">Email</label></div><br>
            <input type="email" name="email" id="email" placeholder="seu@gmail.com" onchange="onChangeEmail()">
            <div class="error" id="email-required-error">Email é obrigatório</div>
            <div class="error">Email é inválido</div>
          </div>

          <div>
            <div><label for="email">Senha</label></div><br>
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <div class="error">Senha é obrigatória</div>
          <div>

            <input type="submit" class="solid" name="submit" value="Login">
          </div>

          <div>
            <h5>Esqueceu sua senha? <a href="senha.php">Clique aqui</a></h3>
          </div>

          <br>
          <div>
            <h5>Não possui uma conta ainda? <a href="tela_cadastro.php">Cadastre-se</a></h5>
          </div>
        </form>
      </div>
    <!-- <form> 
        <div>
            <div><label>Email</label></div>
            <input type="email" name="email" id="email" placeholder="seu@email.com" onchange="onChangeEmail()"/>
            <div class="error" id="email-required-error">Email é obrigatório</div>
            <div class="error" id="email-invalid-error">Email é inválido</div>
        <div>
            <div><label>Senha</label></div>
            <input type="password" name="password" id="password" placeholder="Senha" onchange="onChangePassword()"/>
            <div class="error" id="password-required-error">Senha é obrigatória</div>
        </div>
        <div>
            <button type="button" class="clear" id="recover-password-button" disabled="true">Recuperar senha</button>
        </div>
        <div>
            <button type="button" class="solid" id="login-button" disabled="true">Entrar</button>
        </div>
        <div>
            <button type="button" class="outline">Registrar</button>
        </div>
    </form> -->
  </body>
  <link rel="stylesheet" href="css/login.css">
  <script src="login.js"></script>
</html>