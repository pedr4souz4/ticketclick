<?php
  require 'verifica.php';
  if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):
?>

<!DOCTYPE html>
<html>
  <head>
    <title>TicketClick</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" sizes="250x100" href="icons/icone-ticket.ico">
    
  </head>
  <body>
    <header class="menu-nav">
      <nav class="container navbar navbar-expand-md navbar-dark">
        <a href="index_.php" class="navbar-brand">
          <img src="img/ticketclick.svg" alt="TicketClick">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir Navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nomeUser; ?></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="perfil/perfil_organizador.php">Minha Conta</a>
              <a class="dropdown-item" href="#">Ingressos</a>
              <a class="dropdown-item" href="#">Promoções</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="sair.php">Sair</a>
            </div>
            </li>
          </ul>
        </div>  
      </nav>
    </header>
    <section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="bg-header">
          <a href="eventos/rockinrio.php">
          <img src="img/bg-header.png" alt="Festa" width="1800" height="500">
          </a>
          <p>Coldplay anuncia mais um show em São Paulo no dia 19 de outubro</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="bg-header">
          <a href="eventos/rockinrio.php">
          <img src="img/animes_geek.jpg" alt="Festa" width="1800" height="500">
          </a>
          <p>Evento Geek em Resende</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="container eventos">

      <h1>eventos em destaque</h1>

        <ul class="row evento-lista">
          <li class="evento-item col-4">
            <img src="img/evento1.png" alt="Evento 1">
            <a href="login.php">Saiba mais</a>
          </li>

          <li class="evento-item col-4">
            <img src="img/evento2.png" alt="Evento 2">
            <a href="login.php">Saiba mais</a>
          </li>

          <li class="evento-item col-4">
            <img src="img/evento3.png" alt="Evento 3">
            <a href="login.php">Saiba mais</a>
          </li>
          <li class="evento-item col-4">
            <img src="img/evento4.png" alt="Evento 4">
            <a href="login.php">Saiba mais</a>
          </li>

          <li class="evento-item col-4">
            <img src="img/evento5.png" alt="Evento 5">
            <a href="login.php">Saiba mais</a>
          </li>

          <li class="evento-item col-4">
            <img src="img/evento6.png" alt="Evento 6">
            <a href="login.php">Saiba mais</a>
          </li>
        </ul>
    </section>

    <section class="organizador">

      <h2>Seja um organizador</h2>

      <div class="card-index">

        <div class=" row container">
          <div class="col-6">
            <h3 class="tit-org">Por que acreditamos que não é só organizar um evento, mas momentos.</h3>
            <ul class=" col-6 list-org">
              <li>
                <img class="marcador" src="icons/icone-ticket.ico" alt="ticket">
                <p>Melhor exposição do seu evento. </p>
              </li>
              <li>
                <img class="marcador" src="icons/icone-ticket.ico" alt="ticket">
                <p>Centralização da venda de ingressos. </p>
              </li>
              <li>
                <img class="marcador" src="icons/icone-ticket.ico" alt="ticket">
                <p>Preço justo.</p>
              </li>
              <li>
                <a href="#">Saiba mais</a>
              </li>
            </ul>
          </div>
          <img class="bg-org-img col-6" src="img/bg-organizador-index.png" alt="">
        </div>
      </div>
    </section>
    <footer class="text-center text-lg-start bg-dark text-muted">
  <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
      <!-- Left -->
      <div class="me-5 d-none text-white d-lg-block">
        <span>Saiba mais sobre nós:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://github.com/pedr4souz4/ticketclick" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div> 
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase text-white fw-bold mb-4">
            <!-- <img src="icons/diamond.svg"></img> TicketClick -->
            <i class="fas fa-gem me-"></i> TicketClick
            </h6>
            <p class="text-white">
            O <strong>TicketClick</strong> é um site em desenvolvimento que tem a finalidade 
            de fazer um sistema de controle de acesso em eventos gerais, para inutilizar as listas de presença e ingressos em papel. 
            A validação do ingresso será feita tanto pelo celular via QR Code ou manual pelo site.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase text-white fw-bold mb-4">
              Contato
            </h6>
            <p class="text-white"><i class="fas fa-home text-white me-3"></i> Resende, RJ</p>
            <p class="text-white"><i class="fas fa-envelope me-3"></i>ticketclick0@gmail.com</p>
            <p class="text-white"><i class="fas fa-phone me-3"></i> + 24 999 99 99</p>
            <p class="text-white"><i class="fas fa-envelope-open me-3"></i><a href="contato.php" class="text-reset">Contate-nos</a></p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center text-white p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="http://ticketclick.ml">ticketclick.ml</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
  </body>
</html>

<?php else: header("Location: login.php"); endif; ?>