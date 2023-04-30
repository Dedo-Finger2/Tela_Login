<?php
    
// Tudo relacionado a tratamento de usuário

class UserController
{
    private $users;
    private $email;
    private $password;

    /**
     * Verifica se a senha é válida ou não
     * @param string $email - email do usuário
     * @return boolean - verdadeiro se o email for válida, falso se for inválida
     */
    public function isValidEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false ? true : false;
    }


    /**
     * Verifica se a senha é válida ou não
     * @param string $password - senha do usuário
     * @return boolean - verdadeiro se a senha for válida, falso se for inválida
     */
    public function isValidPassword($password)
    {
        return strlen($password) >= 6 ? true : false;
    }


    public function users()
    {
        // Retornar todos os usuários cadastrados
        return (new UserModel())->getAll();
    }

    /**
     * Cria m formulário de criação de novos usários
     */
    public function create() {
        header('Location: /UserFormView.php');
        exit;
    }
    

    public function store($data)
    {
        // Código
        try {
            // Verifica se tudo está preenchido
            if (empty($data['username']) || empty($data['email']) || empty($data['password'])) {
                throw new Exception('Preencha todos os campos obrigatórios.');
            }
        } catch (Exception $e) {
            return '[ERROR]: ' . $e->getMessage();
        }


        try {
            // Verifica se email e senha são válidos
            if (!$this->isValidEmail($data['email'])) {
                throw new Exception('Email inválido.');
            } elseif (!$this->isValidPassword($data['password'])) {
                throw new Exception('Senha deve ter ao menos 6 dígitos.');
            }
        } catch (Exception $e) {
            return '[ERROR]: ' . $e->getMessage();
        }

        $email = $data['email'];
        $password = $data['password'];
        $username = $data['username'];

        if ($this->isValidEmail($email) && $this->isValidPassword($password)) {
            $newUser = (new UserModel())->createUser($data['username'], $data['email'], $data['password']);

            if (is_integer($newUser)) {
                return $newUser;
            } elseif (get_class($newUser) == "mysqli_sql_exception" && ($newUser->getCode() == 1062)) {
                return ("1062: [ERRO]: O NOME DE USUÁRIO JÁ ESTÁ EM USO!");
            } else {
                return ("[ERROR]: Ocorreu um erro inesperado, tente novamente mais tarde.");
            }
        }

    }

}
