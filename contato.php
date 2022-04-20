<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="css/contato.css" rel="stylesheet">
    <link rel="stylesheet" href="cadastrar.php">
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="ubs.php">
    <link rel="stylesheet" href="medicamento.php">
    <link rel="stylesheet" href="telainicial.php">
    <link rel="icon" href="imagens/cruz.png">
    

    <Title>Contate-nos - CRC</Title>

  </head>
  <body>
  <header>
    <nav class="navbar navbar-light bg-dark">
      <div>
        <img class="rounded-circle" sizes="70" height="70" src="img/logo.png">
      </div>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="cadastro_organizador.php">Torne-se um organizador</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="login.php">Acesse sua conta</a>
        </li>
  
        <li class="nav-item">
          <a class="btn btn-outline-primary me-2" href="cadastro_convidado.php">Cadastre-se</a>
        </li>
      </ul>
    </nav>
  </header>
      <br><br/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
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
