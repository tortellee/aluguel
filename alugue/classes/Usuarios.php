<?php
require_once 'classes\Conexaobd.php';
/*nome da classe*/
class Usuarios{

    /*atributos*/
    public $id;
    public $tipo;
    public $login;
    public $senha;
    public $nome;
    public $telefone;
    public $cpf;
    public $cidade;
    public $bairro;
    public $rua;
    public $numero;
    public $data;


    /* métodos */
    public function listar(){
        $conexao =  Conexaobd::pegarConexao();

        $query = "SELECT id, tipo, login, nome, telefone, cpf, cidade, bairro, rua, numero, data FROM tb_usuarios";

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Categoria($id){
        $conexao =  Conexaobd::pegarConexao();

        $query = "SELECT id, tipo, login, nome, telefone, cpf, cidade, bairro, rua, numero, data FROM tb_usuarios WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            return $linha;
        }
    }

    public function inserir($tipo, $login, $senha, $nome, $telefone, $cpf, $cidade, $bairro, $rua, $numero, $data){
        $conexao =  Conexaobd::pegarConexao();

        $query="INSERT INTO tb_usuarios(tipo, login, senha, nome, telefone, cpf, cidade, bairro, rua, numero, data) VALUES('".$tipo."','".$login."','".$senha."','".$nome."','".$telefone."','".$cpf."',
        '".$cidade."','".$bairro."','".$rua."','".$numero."', NOW())";

        $conexao->exec($query);
    }

    public function alterar($id, $tipo, $login, $senha, $nome, $telefone, $cpf, $cidade, $bairro, $rua, $numero, $data){
        $conexao =  Conexaobd::pegarConexao();
        $query = "UPDATE tb_usuarios SET tipo = '".$tipo."', login = '".$login."', senha = '".$senha."', nome = '".$nome."', telefone = '".$telefone."', cpf = '".$cpf."',
        cidade = '".$cidade."', bairro = '".$bairro."', rua = '".$rua."',numero = '".$numero."', data = '".$data."' WHERE id = " . $id;
        $conexao->exec($query);


    }
    public function excluir($id){
        $conexao =  Conexaobd::pegarConexao();

        $query = "DELETE FROM tb_usuarios WHERE id = " . $id;
        $conexao->exec($query);
    }
}
