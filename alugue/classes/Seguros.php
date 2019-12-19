<?php
require_once 'classes\Conexaobd.php';
/*nome da classe*/
class Seguros{

    /*atributos*/
    public $id;
    public $nome_seguro;
    public $tempo_seguro;
    public $tipo_seguro;
    public $nome_assegurado;
    public $placa_assegurado;
    public $cpf_assegurado;
    public $cadastrado;


    /* métodos */
    public function listar(){
        $conexao =  Conexaobd::pegarConexao();

        $query = "SELECT id, nome_seguro, tempo_seguro, tipo_seguro, nome_assegurado, placa_assegurado, cpf_assegurado, cadastrado FROM tb_seguros";

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Categoria($id){
        $conexao =  Conexaobd::pegarConexao();

        $query = "SELECT id, nome_seguro, tempo_seguro, tipo_seguro, nome_assegurado, placa_assegurado, cpf_assegurado, cadastrado FROM tb_seguros WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            return $linha;
        }
    }

    public function inserir($nome_seguro, $tempo_seguro, $tipo_seguro, $nome_assegurado, $placa_assegurado, $cpf_assegurado, $cadastrado){
        $conexao =  Conexaobd::pegarConexao();

        $query="INSERT INTO tb_seguros(nome_seguro, tempo_seguro, tipo_seguro, nome_assegurado, placa_assegurado, cpf_assegurado, cadastrado) VALUES('".$nome_seguro."','".$tempo_seguro."','".$tipo_seguro."','".$nome_assegurado."','".$placa_assegurado."','".$cpf_assegurado."', NOW())";

        $conexao->exec($query);
    }

    public function alterar($id, $nome_seguro, $tempo_seguro, $tipo_seguro, $nome_assegurado, $placa_assegurado, $cpf_assegurado, $cadastrado){
        $conexao =  Conexaobd::pegarConexao();
        $query = "UPDATE tb_seguros SET nome_seguro = '".$nome_seguro."', tempo_seguro = '".$tempo_seguro."', tipo_seguro = '".$tipo_seguro."', nome_assegurado = '".$nome_assegurado."', placa_assegurado = '".$placa_assegurado."', cpf_assegurado = '".$cpf_assegurado."', cadastrado = '".$cadastrado."' WHERE id = " . $id;
        $conexao->exec($query);


    }
    public function excluir($id){
        $conexao =  Conexaobd::pegarConexao();

        $query = "DELETE FROM tb_seguros WHERE id = " . $id;
        $conexao->exec($query);
    }
}
