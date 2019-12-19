<?php
require_once 'classes\Conexaobd.php';
/*nome da classe*/
class Categoria{

    /*atributos*/
    public $id;
    public $tipo;



    /* métodos */
    public function listar(){
        $conexao =  Conexaobd::pegarConexao();

        $query = "SELECT id, tipo FROM tb_categorias";

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Categoria($id){
        $conexao =  Conexaobd::pegarConexao();

        $query = "SELECT id, tipo FROM tb_categorias WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            return $linha;
        }
    }

    public function inserir($tipo){
        $conexao =  Conexaobd::pegarConexao();

        $query="INSERT INTO tb_categorias(tipo) VALUES('".$tipo."')";

        $conexao->exec($query);
    }

    /*public function alterar($id, $categorias){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=alugue","root","");
        $query = "UPDATE tb_categorias SET categorias = '".$categorias."' WHERE id = " . $id;
        $conexao->exec($query);


    }*/
    public function excluir($id){
        $conexao =  Conexaobd::pegarConexao();

        $query = "DELETE FROM tb_categorias WHERE id = " . $id;
        $conexao->exec($query);
    }
}
