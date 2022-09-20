<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon"  sizes="250x100" href="icons/icone-ticket.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/contato.css">

    <Title>Contate-nos</Title>

  </head>
  <body>
  <header class="menu-nav">
			<nav class="container navbar navbar-expand-md navbar-dark">
				<a href="index.php" class="navbar-brand">
				<img src="img/ticketclick.svg" alt="TicketClick">
				</a>
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir Navegação">
				<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
					<a class="nav-link" href="sobre.html">Sobre</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="cadastro_convidado.php">Inscrever-se</a>
					</li>
					<li class="nav-item">
					<a class="btn-menu btn ml-md-2" href="cadastro_organizador.php">Seja um organizador</a>
					</li>
				</ul>
				</div>  
			</nav>
		</header>
    <br><br/>
    <div class="container">
      <h2 class="text-center"></h2>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 pb-5">
            <!--Form with header-->
            <form action="contato_enviar.php" method="post">
              <div class="card border-primary rounded-0">
                <div class="card-header p-0">
                  <div class="bg-gray text-black text-center py-2">
                    <h3><i class="fa fa-envelope"></i> Contate-nos</h3>
                    <p>Buscando sempre o melhor para você!</p>
                  </div>
                </div>
              <div class="card-body p-3">
                <!--Body-->
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                    </div>
                    <input type="text" class="form-control" id="nombre" name="nome" placeholder="Nome" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                    </div>
                    <input type="email" class="form-control" id="nombre" name="email" placeholder="E-mail" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-archive text-info"></i></div>
                    </div>
                    <input type="text" class="form-control" id="nombre" name="assunto" placeholder="Assunto" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                    </div>
                    <textarea class="form-control" name="mensagem" placeholder="Envia-nos sua mensagem" required></textarea>
                  </div>
                </div>
                <div class="text-center">
                  <input type="submit" value="Enviar" class="btn btn-outline-primary btn-block rounded-0 py-2">
                </div>
              </div>
            </div>
          </form>
          <!--Form with header-->
        </div>
      </div>
    </div>
  <br><br/>
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
            <p class="text-white">
            <i class="fas fa-envelope me-3"></i>
              ticketclick0@gmail.com
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
