<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon"  sizes="250x100" href="../../icons/icone-ticket.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">

    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/recuperar.css">

    <Title>Recuperar senha</Title>

    </head>
    <body>
        <header class="menu-nav">
            <nav class="container navbar navbar-expand-md navbar-dark">
                <a href="../../index.php" class="navbar-brand">
                <img src="../../img/ticketclick.svg" alt="TicketClick">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir Navegação">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="../../login.php">Login</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../../cadastro_convidado.php">Inscrever-se</a>
                    </li>
                    <li class="nav-item">
                    <a class="btn-menu btn ml-md-2" href="../../cadastro_organizador.php">Seja um organizador</a>
                    </li>
                </ul>
                </div>  
            </nav>
        </header>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-6 offset-md-3">
                <form method="POST">
                <h2>Recuperar Senha</h4>
                <label>Insira o e-mail cadastrado</label>
                <input type="email" name="email" class="form-control" required>
                <code>Insira o e-mail cadastrado para receber um link para trocar a senha pelo e-mail.</code><br><tr><br>

                <input type="submit" value="Enviar dados para o e-mail" class="btn btn-outline-success btn-lg btn-block">
                <input type="hidden" name="env" value="form"> 
                </form>
            </div>
        </div>
        <?php include_once("../lib/functions.php");
        echo verifica_dados($conexao);?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>

