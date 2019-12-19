<?php
require_once 'classes\Conexaobd.php';
/*nome da classe*/
class Lojas{

    /*atributos*/
    public $id;
    public $nome;
    public $rua;
    public $numero;
    public $bairro;
    public $cidade;
    public $telefone;

    /* métodos */
    public function listar(){
        $conexao =  Conexaobd::pegarConexao();

        $query = "SELECT id, nome, rua, numero, bairro, cidade, telefone FROM tb_lojas";

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Categoria($id){
        $conexao =  Conexaobd::pegarConexao();

        $query = "SELECT id, nome, rua, numero, bairro, cidade, telefone FROM tb_lojas WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            return $linha;
        }
    }

    public function inserir($nome, $rua, $numero, $bairro, $cidade, $telefone){
        $conexao =  Conexaobd::pegarConexao();

        $query="INSERT INTO tb_lojas(nome, rua, numero, bairro, cidade, telefone) VALUES('".$nome."','".$rua."','".$numero."','".$bairro."','".$cidade."','".$telefone."')";

        $conexao->exec($query);
    }

    public function alterar($id, $nome, $rua, $numero, $bairro, $cidade, $telefone){
        $conexao =  Conexaobd::pegarConexao();
        $query = "UPDATE tb_lojas SET nome = '".$nome."', rua = '".$rua."', numero = '".$numero."', bairro = '".$bairro."', cidade = '".$cidade."', telefone = '".$telefone."' WHERE id = " . $id;
        $conexao->exec($query);


    }
    public function excluir($id){
        $conexao =  Conexaobd::pegarConexao();

        $query = "DELETE FROM tb_lojas WHERE id = " . $id;
        $conexao->exec($query);
    }
}
