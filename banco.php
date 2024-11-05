<?php

class Banco
{
    private static $dbNome = 'projeto_php_0810';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'root';
    private static $dbSenha = '';
    private static $cont = null;

    public function __construct()
    {
        die('A função Init nao é permitida!');
    }
        public static function conectar()
    {
        if (null == self::$cont) 
        {
            try 
            {
                self::$cont = new PDO("mysql:host=" . self::$dbHost.";"."dbname=".self::$dbNome,self::$dbUsuario, self::$dbSenha);
            } 
            catch (PDOException $exception) 
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }

    public static function desconectar()
    {
        self::$cont = null;
    }
}

?>