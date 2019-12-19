<?php
Class Conexaobd
{
    public static function pegarConexao()
    {
        $drive = 'mysql';
        $hostname = '127.0.0.1';
        $username = 'root';
        $password = '';
        $database = 'alugue';
        $conexao = new PDO($drive. ':host=' . $hostname . ';dbname=' .$database, $username, $password);
        return $conexao;
    }
}
