<?php
    class Usuario {

        public function login($email, $senha) {
            global $pdo;

            $sql = "SELECT * FROM cadastro_convidado WHERE email = :email AND senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->bindValue("senha", $senha);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $dado = $sql->fetch();

                $_SESSION['idUser'] = $dado['ID_convidado'];

                return true;
            }else{
                return false;
            }
        }

        public function email_valido($e_mail) {
            global $pdo;

            $sql = "SELECT email FROM cadastro_convidado WHERE email = :email";
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

        public function idconvidado_usuario($idconvidado_) {
            global $pdo;

            $array = array();

            $sql = "SELECT ID_convidado FROM cadastro_convidado WHERE ID_convidado = :ID_convidado";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_convidado", $idconvidado_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function logged($id) {
            global $pdo;

            $array = array();

            $sql = "SELECT nome FROM cadastro_convidado WHERE ID_convidado = :ID_convidado";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_convidado", $id);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function email_usuario($email_) {
            global $pdo;

            $array = array();

            $sql = "SELECT email FROM cadastro_convidado WHERE ID_convidado = :ID_convidado";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_convidado", $email_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function celular_usuario($celular_) {
            global $pdo;

            $array = array();

            $sql = "SELECT celular FROM cadastro_convidado WHERE ID_convidado = :ID_convidado";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_convidado", $celular_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function cpf_usuario($cpf_) {
            global $pdo;

            $array = array();

            $sql = "SELECT cpf FROM cadastro_convidado WHERE ID_convidado = :ID_convidado";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_convidado", $cpf_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function data_nasc_usuario($data_nasc_) {
            global $pdo;

            $array = array();

            $sql = "SELECT data_nasc FROM cadastro_convidado WHERE ID_convidado = :ID_convidado";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_convidado", $data_nasc_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function cep_usuario($cep_) {
            global $pdo;

            $array = array();

            $sql = "SELECT cep FROM cadastro_convidado WHERE ID_convidado = :ID_convidado";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_convidado", $cep_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function endereco_usuario($endereco_) {
            global $pdo;

            $array = array();

            $sql = "SELECT endereco FROM cadastro_convidado WHERE ID_convidado = :ID_convidado";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_convidado", $endereco_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function bairro_usuario($bairro_) {
            global $pdo;

            $array = array();

            $sql = "SELECT bairro FROM cadastro_convidado WHERE ID_convidado = :ID_convidado";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_convidado", $bairro_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function numero_usuario($numero_) {
            global $pdo;

            $array = array();

            $sql = "SELECT numero FROM cadastro_convidado WHERE ID_convidado = :ID_convidado";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_convidado", $numero_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function complemento_usuario($complemento_) {
            global $pdo;

            $array = array();

            $sql = "SELECT complemento FROM cadastro_convidado WHERE ID_convidado = :ID_convidado";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_convidado", $complemento_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function cidade_usuario($cidade_) {
            global $pdo;

            $array = array();

            $sql = "SELECT cidade FROM cadastro_convidado WHERE ID_convidado = :ID_convidado";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_convidado", $cidade_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function estado_usuario($estado_) {
            global $pdo;

            $array = array();

            $sql = "SELECT estado FROM cadastro_convidado WHERE ID_convidado = :ID_convidado";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_convidado", $estado_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function senha_usuario($senha_) {
            global $pdo;

            $array = array();

            $sql = "SELECT senha FROM cadastro_convidado WHERE ID_convidado = :ID_convidado";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_convidado", $senha_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function foto_usuario($foto_) {
            global $pdo;

            $array = array();

            $sql = "SELECT foto FROM cadastro_convidado WHERE ID_convidado = :ID_convidado";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("ID_convidado", $foto_);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }
    }
?>