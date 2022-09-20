<?php
    class Usuario {

        public function login($email, $senha) {
            global $pdo;

            $sql = "SELECT * FROM cadastro_organizador WHERE email = :email AND senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->bindValue("senha", $senha);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $dado = $sql->fetch();

                $_SESSION['idUser'] = $dado['ID_organizador'];

                return true;
            }else{
                return false;
            }
        }

        public function email_valido($e_mail) {
            global $pdo;

            $sql = "SELECT email FROM cadastro_organizador WHERE email = :email";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email", $e_mail);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $dado = $sql->fetch();

                $_SESSION['email_valido'] = $dado['email'];

                return true;
            }else{
                return false;
            }
        }

        public function idconvidado_usuario($idorganizador_) {
            global $pdo;

            $array = array();

            $sql = "SELECT ID_organizador FROM cadastro_organizador WHERE ID_organizador = :ID_organizador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_organizador", $idorganizador_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function logged($id) {
            global $pdo;

            $array = array();

            $sql = "SELECT nome FROM cadastro_organizador WHERE ID_organizador = :ID_organizador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_organizador", $id);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function email_usuario($email_) {
            global $pdo;

            $array = array();

            $sql = "SELECT email FROM cadastro_organizador WHERE ID_organizador = :ID_organizador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_organizador", $email_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function celular_usuario($celular_) {
            global $pdo;

            $array = array();

            $sql = "SELECT celular FROM cadastro_organizador WHERE ID_organizador = :ID_organizador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_organizador", $celular_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function cpf_usuario($cpf_) {
            global $pdo;

            $array = array();

            $sql = "SELECT cpf FROM cadastro_organizador WHERE ID_organizador = :ID_organizador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_organizador", $cpf_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function data_nasc_usuario($data_nasc_) {
            global $pdo;

            $array = array();

            $sql = "SELECT data_nasc FROM cadastro_organizador WHERE ID_organizador = :ID_organizador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_organizador", $data_nasc_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function cep_usuario($cep_) {
            global $pdo;

            $array = array();

            $sql = "SELECT cep FROM cadastro_organizador WHERE ID_organizador = :ID_organizador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_organizador", $cep_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function endereco_usuario($endereco_) {
            global $pdo;

            $array = array();

            $sql = "SELECT endereco FROM cadastro_organizador WHERE ID_organizador = :ID_organizador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_organizador", $endereco_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function bairro_usuario($bairro_) {
            global $pdo;

            $array = array();

            $sql = "SELECT bairro FROM cadastro_organizador WHERE ID_organizador = :ID_organizador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_organizador", $bairro_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function numero_usuario($numero_) {
            global $pdo;

            $array = array();

            $sql = "SELECT numero FROM cadastro_organizador WHERE ID_organizador = :ID_organizador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_organizador", $numero_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function complemento_usuario($complemento_) {
            global $pdo;

            $array = array();

            $sql = "SELECT complemento FROM cadastro_organizador WHERE ID_organizador = :ID_organizador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_organizador", $complemento_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function cidade_usuario($cidade_) {
            global $pdo;

            $array = array();

            $sql = "SELECT cidade FROM cadastro_organizador WHERE ID_organizador = :ID_organizador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_organizador", $cidade_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function estado_usuario($estado_) {
            global $pdo;

            $array = array();

            $sql = "SELECT estado FROM cadastro_organizador WHERE ID_organizador = :ID_organizador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_organizador", $estado_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function senha_usuario($senha_) {
            global $pdo;

            $array = array();

            $sql = "SELECT senha FROM cadastro_organizador WHERE ID_organizador = :ID_organizador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_organizador", $senha_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function foto_usuario($foto_) {
            global $pdo;

            $array = array();

            $sql = "SELECT foto FROM cadastro_organizador WHERE ID_organizador = :ID_organizador";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_organizador", $foto_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }
    }
?>