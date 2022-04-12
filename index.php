<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon"  sizes="250x100" href="icons/ticket.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="css/index2.css" rel="stylesheet">
    <link rel="stylesheet" href="login.php">
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="tela_cadastro.php">
    
    <Title>TicketClick</Title>

  </head>
  <body>
    <header>
    <nav class="navbar navbar-light bg-dark">
              <div>
              <img sizes="90" height="60"src= "icons/ticket.ico">
      
              <a class="navbar-brand text-white" href="index.php">TicketClick</a>
              
            </div>
            <ul class="nav">
            	<li class="nav-item">
                    <a class="nav-link text-white" href="tela_cadastro2.php">Torne-se um organizador</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="teste_login.php">Acesse sua conta</a>
                </li>
				
                <li class="nav-item">
                  <a class="btn btn-outline-primary" href="tela_cadastro.php">Cadastre-se</a>
                </li>
            </ul>
          </nav>
    </header>
    <div class="texto-animado">
      <h1 class="animated fadeIn delay-04">
            <span class="animated flipInX delay-06">Sejam</span><span class="animated flipInX delay-10">Bem-vindos</span>
      </h1>
                    
      <p class="animated flipInX delay-15">TicketClick</p>
                    
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item">
      <img class="d-block w-100" src="https://f.i.uol.com.br/fotografia/2021/10/14/1634214754616823628bbc0_1634214754_3x2_lg.jpg" width="1500" height="500" alt="Primeiro Slide">
      <div class="carousel-caption d-none d-md-block">
      <h5 id="titulo">Coldplay</h5>
      <p id="teste">Coldplay anuncia show em SP e outro no RJ, além do Rock in Rio</p>
  </div>
    </div>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="" alt="Segundo Slide">
    </div> -->
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2021/06/28111_E0F1D56D3B62CA0F.jpg?w=876&h=484&crop=1" width="1500" height="500" alt="Terceiro Slide">
      <div class="carousel-caption d-none d-md-block">
      <h5 id="titulo">ROCK IN RIO 2022</h5>
      <p id="teste">Ingressos para cinco dias de Rock in Rio esgotam nas primeiras horas de venda</p>
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
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-5 text-dark my-4">
            <h1>Eventos em destaque</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img src="" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Dúvidas?</h5>
                <p class="card-text">Tire sua dúvida via e-mail!</p>
                <a href="contato.php" class="btn btn-primary">Acessar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="width: 20rem;">
              <img src="" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">?</h5>
                <p class="card-text">Acesse para saber mais!</p>
                <a href="" class="btn btn-primary">Acessar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img src="" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Acesse para mais informações sobre o site</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Acessar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br/>
    </section>
    <!-- Footer -->
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
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div> 
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase text-white fw-bold mb-4">
          <!-- <img src="icons/diamond.svg"></img> TicketClick -->
          <i class="fas fa-gem me-"></i> Cadastro Regional de Comorbidades - CRC
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
          <p class="text-white">
          <i class="fas fa-envelope me-3"></i>
            ticketclick@gmail.com
          </p>
          <p class="text-white"><i class="fas fa-phone me-3"></i> + 24 999 99 99</p>
          <p class="text-white"><i class="fas fa-envelope-open me-3"></i><a href="contato.php">Contate-nos</a></p>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
 