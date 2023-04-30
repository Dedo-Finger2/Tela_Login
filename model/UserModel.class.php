<?php
    // Tudo relacionado a manipulação de usuários

require_once("Conn.class.php");

class UserModel
{
    private $iduser;
    private $username;
    private $email;
    private $password;
    private $conexao;

    public function createUser($username, $email, $password) {
        $this->conexao = Conexao::conectar();

        if (get_class($this->conexao) == "mysqli") {
            $createUser = $this->conexao->prepare("INSERT INTO users (username, email, password) VALUES (?,?,?)");
            $createUser->bind_param("ssi", $username, $email, $password);

            try {
                $createUser->execute();
            } catch (mysqli_sql_exception $e) {
                return $e;
            }
        } else {
            return $this->conexao;
        }

    }

}
