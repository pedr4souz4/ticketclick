<?php

require 'conexao.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])) {

    require_once 'Usuario_class.php';
    $u = new Usuario(); 

    $listIdconvidado = $u->idconvidado_usuario($_SESSION['idUser']);
    $idconvidadoUser = $listIdconvidado['ID_convidado'];

    $listLogged = $u->logged($_SESSION['idUser']);
    $nomeUser = $listLogged['nome'];
    //echo $listLogged['nome'];

    $listEmail = $u->email_usuario($_SESSION['idUser']);
    $emailUser = $listEmail['email'];

    $listCelular = $u->celular_usuario($_SESSION['idUser']);
    $celularUser = $listCelular['celular'];

    $listCpf = $u->cpf_usuario($_SESSION['idUser']);
    $cpfUser = $listCpf['cpf'];

    $listData_nasc = $u->data_nasc_usuario($_SESSION['idUser']);
    $data_nascUser = $listData_nasc['data_nasc'];

    $listCep = $u->cep_usuario($_SESSION['idUser']);
    $cepUser = $listCep['cep'];

    $listEndereco = $u->endereco_usuario($_SESSION['idUser']);
    $enderecoUser = $listEndereco['endereco'];

    $listBairro = $u->bairro_usuario($_SESSION['idUser']);
    $bairroUser = $listBairro['bairro'];

    $listNumero = $u->numero_usuario($_SESSION['idUser']);
    $numeroUser = $listNumero['numero'];

    $listComplemento= $u->complemento_usuario($_SESSION['idUser']);
    $complementoUser = $listComplemento['complemento'];

    $listCidade = $u->cidade_usuario($_SESSION['idUser']);
    $cidadeUser = $listCidade['cidade'];

    $listEstado = $u->estado_usuario($_SESSION['idUser']);
    $estadoUser = $listEstado['estado'];

    $listFoto = $u->foto_usuario($_SESSION['idUser']);
    $fotoUser = $listFoto['foto'];

    $listSenha = $u->senha_usuario($_SESSION['idUser']);
    $senhaUser = $listSenha['senha'];
    
    

} else {
    header("Location: login.php");
}

?> 