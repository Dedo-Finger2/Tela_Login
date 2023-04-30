<?php
// classe abstrata com a conexão com o banco de dados

use Exception;

class Conexao
{
    protected static $conexao;

    public static function conectar()
    {
        if (!isset(self::$conexao)) {
            try {
                self::$conexao = new mysqli("localhost", "root", "", "user_list");
            } catch (Exception $e) {
                return $e;
            }
            self::$conexao->set_charset("utf8");
        }
        return self::$conexao;
    }
}