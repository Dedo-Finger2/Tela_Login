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


    /**
     * Criação de um novo usuário
     * @param string $username - nome do usuário
     * @param string $email - email do usuário
     * @param int $password - senha do usuário
     */
    public function createUser($username, $email, $password)
    {
        // Código do método
        $this->conexao = Conexao::conectar();

        if (get_class($this->conexao) == "mysqli") {
            // Se a conexão for do tipo mysqli, prepara o comando SQL e vincula os parametros
            $createUser = $this->conexao->prepare("INSERT INTO users (username, email, password) VALUES (?,?,?)");
            $createUser->bind_param("ssi", $username, $email, $password);

            // Tenta executar a ação $createUser e verifica se tem algum erro
            try {
                // Executa o comando SQL
                $createUser->execute();
            } catch (mysqli_sql_exception $e) {
                // Retorna o erro ao usuário
                return $e;
            }
        } else {
            // Trata outros tipos de erro
            return $this->conexao;
        }

    }


    /**
     * Atualiza dados de um usuário
     * @param int $iduser - Identificador do usuário
     * @param string $username - nome do usuário
     * @param string $email - email do usuário
     * @param int $password - senha do usuário
     */
    public function updateUser($iduser, $username, $email, $password)
    {
        // Código do método
        $this->conexao = Conexao::conectar();

        if (get_class($this->conexao) == "mysqli") {
            // Se a conexão for do tipo mysqli, prepara o comando SQL e vincula os parametros
            $updateUser = $this->conexao->prepare("UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?");
            $updateUser->bind_param("ssii", $username, $email, $password, $iduser);

            // Tenta executar a ação $updateUser e verifica se tem algum erro
            try {
                // Executa o comando SQL
                $updateUser->execute();
            } catch (mysqli_sql_exception $e) {
                // Retorna o erro ao usuário
                return $e;
            }
        } else {
            // Trata outros tipos de erro
            return $this->conexao;
        }

    }


     /**
      * Deleta um usuário
     * @param int $iduser - Identificador do usuário
     */
    public function deleteUser($iduser)
    {
        // Código do método
        $this->conexao = Conexao::conectar();

        if (get_class($this->conexao) == "mysqli") {
            // Se a conexão for do tipo mysqli, prepara o comando SQL e vincula os parametros
            $deleteUser = $this->conexao->prepare("DELETE FROM users WHERE id = ?");
            $deleteUser->bind_param("i", $iduser);

            // Tenta executar a ação $deleteUser e verifica se tem algum erro
            try {
                // Executa o comando SQL
                $deleteUser->execute();
            } catch (mysqli_sql_exception $e) {
                // Retorna o erro ao usuário
                return $e;
            }
        } else {
            // Trata outros tipos de erro
            return $this->conexao;
        }

    }

}