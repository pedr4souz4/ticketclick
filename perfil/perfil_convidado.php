<?php
  require '../verifica.php';
  if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):
?>

<!DOCTYPE html>
<html>
  <head>
    <title>TicketClick - Perfil do Usuário</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" sizes="250x100" href="../icons/icone-ticket.ico">
    
  </head>
  <body>
    <header class="menu-nav">
      <nav class="container navbar navbar-expand-md navbar-dark">
        <a href="../index_convidado.php" class="navbar-brand">
          <img src="../img/ticketclick.svg" alt="TicketClick">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir Navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="contato.php">Contato</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nomeUser; ?></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="perfil/perfil.php">Minha Conta</a>
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
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Editar Perfil</h1>
            </div>
            
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content --> 
      <section class="content">
        <div class="container-fluid">
        <?php
          include('conexao.php');
          
          /*$id = filter_input(INPUT_GET,'id',FILTER_DEFAULT);

        $select = "SELECT * FROM tb_contatos WHERE id_contatos=:id";
          try{
              $resultado = $conect->prepare($select);
              $resultado->bindParam(':id',$id, PDO::PARAM_INT);
              $resultado->execute();

              $contar = $resultado->rowCount();
              if($contar>0){
                  while($show = $resultado->FETCH(PDO::FETCH_OBJ)){
                      $idCont = $show->id_contatos;
                      $nome = $show->nome_contatos;
                      $fone = $show->fone_contatos;
                      $email = $show->email_contatos;
                      $foto = $show->foto_contatos;
                  }
              }else{
                  echo '<div class="alert alert-danger">Não há dados com o id informado!</div>';
              }
          }catch(PDOException $e){
              echo "<strong>ERRO DE SELECT NO PDO: </strong>".$e->getMessage();
          }*/
        ?>
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Editar Perfil</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nome</label>
                      <input type="text" class="form-control" name="nome" id="nome" required value="<?php echo $nomeUser; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Endereço de E-mail</label>
                      <input type="email" class="form-control" name="email" id="email" required value="<?php echo $emailUser; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Celular</label>
                      <input type="text" class="form-control" name="celular" id="celular" maxlength="15" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="<?php echo $celularUser; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">CPF</label>
                      <input type="text" class="form-control" name="cpf" id="cpf" maxlength="14" placeholder="000.000.000-00" onkeydown="fMasc( this, mCPF );" value="<?php echo $cpfUser; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Data de Nascimento</label>
                      <input type="date" class="form-control" name="data_nasc" id="data_nasc" required value="<?php echo $data_nascUser; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">CEP</label>
                      <input type="text" class="form-control" name="cep" id="cep" maxlength="10" placeholder="00.000-000" onblur="pesquisacep(this.value);" value="<?php echo $cepUser; ?>" onblur="pesquisacep(this.value);">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Rua</label>
                      <input type="text" class="form-control" name="endereco" id="endereco" value="<?php echo $enderecoUser; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bairro</label>
                      <input type="text" class="form-control" name="bairro" id="bairro" value="<?php echo $bairroUser; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Número</label>
                      <input type="text" class="form-control" name="numero" id="numero" value="<?php echo $numeroUser; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Complemento</label>
                      <input type="text" class="form-control" name="complemento" id="complemento" value="<?php echo $complementoUser; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Cidade</label>
                      <input type="text" class="form-control" name="cidade" id="cidade" value="<?php echo $cidadeUser; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Estado</label>
                      <input type="text" class="form-control" name="estado" id="estado" value="<?php echo $estadoUser; ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Senha</label>
                      <input type="password" class="form-control" name="senha" id="senha" required value="<?php echo $senhaUser; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Avatar do usuário</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="foto" id="foto">
                          <label class="custom-file-label" for="exampleInputFile"><?php echo $fotoUser; ?></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" name="upPerfil" class="btn btn-primary">Alterar dados do usuário</button>
                  </div>
                </form>
                <?php
                  if(isset($_POST['upPerfil'])){
                  $nome = $_POST['nome'];
                  $email = $_POST['email'];
                  $celular = $_POST['celular'];
                  $cpf = $_POST['cpf'];
                  $cep = $_POST['cep'];
                  $data_nasc = $_POST['data_nasc'];
                  $endereco = $_POST['endereco'];
                  $bairro = $_POST['bairro'];
                  $numero = $_POST['numero'];
                  $complemento = $_POST['complemento'];
                  $cidade = $_POST['cidade'];
                  $estado = $_POST['estado'];
                  $senha = $_POST['senha'];
                  //$senha = base64_encode($_POST['senha']);
                  //Verificar se existe imagem para fazer o upload
                  if(!empty($_FILES['foto']['name'])) {
                    $formatP = array("png", "jpg", "jpeg", "gif");
                    $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

                    if (in_array($extensao, $formatP)) {
                      $pasta = "../img/";
                      $temporario = $_FILES['foto']['tmp_name'];
                      $novoNome = uniqid() . ".{$extensao}";

                      if (move_uploaded_file($temporario, $pasta . $novoNome)) {

                      } else {
                        $mensagem = "Erro, não foi possivel fazer o upload do arquivo!";
                      }
                    } else {
                      echo "Formato inválido";
                    }
                  }else{
                    $novoNome = $foto_user;
                  }

                  $update = "UPDATE cadastro_convidado SET foto=:foto,nome=:nome,senha=:senha,celular=:celular,cpf=:cpf,data_nasc=:data_nasc,cep=:cep,endereco=:endereco,bairro=:bairro,numero=:numero,complemento=:complemento,cidade=:cidade,estado=:estado WHERE email=:email";
                  try{
                    $result = $pdo->prepare($update);
                    $result->bindParam(':cpf',$cpf,PDO::PARAM_STR);
                    $result->bindParam(':foto',$novoNome,PDO::PARAM_STR);
                    $result->bindParam(':nome',$nome,PDO::PARAM_STR);
                    $result->bindParam(':email',$email,PDO::PARAM_STR);
                    $result->bindParam(':celular',$celular,PDO::PARAM_STR);
                    $result->bindParam(':data_nasc',$data_nasc,PDO::PARAM_STR);
                    $result->bindParam(':cep',$cep,PDO::PARAM_STR);
                    $result->bindParam(':endereco',$endereco,PDO::PARAM_STR);
                    $result->bindParam(':bairro',$bairro,PDO::PARAM_STR);
                    $result->bindParam(':numero',$numero,PDO::PARAM_STR);
                    $result->bindParam(':complemento',$complemento,PDO::PARAM_STR);
                    $result->bindParam(':cidade',$cidade,PDO::PARAM_STR);
                    $result->bindParam(':estado',$estado,PDO::PARAM_STR);
                    $result->bindParam(':senha',$senha,PDO::PARAM_STR);
                    $result->execute();
                    // alerte abaixo
                    $contar = $result->rowCount();
                    if($contar>0){
                      echo '<div class="container">
                                  <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-check"></i> Ok !!!</h5>
                                    Perfil atualizados com sucesso.
                                  </div>
                                  </div>';
                      echo "<script>location.href=\"perfil_convidado.php\";alert('Perfil atualizado com sucesso!');</script>";
                    

                    }else{
                      echo "<script>location.href=\"perfil_convidado.php\";alert('Erro!!! Perfil não foi atualizado!');</script>";
                      // echo '<div class="alert alert-danger alert-dismissible">
                      //               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      //               <h5><i class="icon fas fa-check"></i> Erro !!!</h5>
                      //               Perfil não foi atualizar.
                      //             </div>';
                    }
                  }catch (PDOException $e){
                    echo "<strong>ERRO DE PDO= </strong>".$e->getMessage();
                  }

                }
                ?>
              </div>
            </div>
              
              <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Dados do Usuário</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0" style="text-align: center; margin-bottom: 98px">
                  <center><img src="../img/<?php echo $fotoUser; ?>" alt="<?php echo $foto; ?>" title="<?php echo $foto; ?>" style="width: 200px; border-radius: 100%; margin-top: 30px"></center>
                  <h1><?php echo $nomeUser; ?></h1>
                  <strong><?php echo $emailUser; ?></strong>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              </div>

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="../js/tela_cadastro.js"></script>
  </body>
</html>

<?php else: header("Location: login_convidado.php"); endif; ?>
  