<?php
require_once 'classes\Conexaobd.php';
/*nome da classe*/
class Veiculos{

    /*atributos*/
    public $id;
    public $marca;
    public $modelo;
    public $placa;
    public $ano;
    public $cor;
    public $status;
    public $cpf;
    public $assegurado;


    /* métodos */
    public function listar(){
        $conexao =  Conexaobd::pegarConexao();
        $query = "SELECT id, categoria, marca, modelo, placa, ano, cor, status, cpf, assegurado FROM tb_veiculos";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    /* métodos Listar Status -----------------------------------------------------------------------------------------------------------*/
    public function listarStatusAlugado(){
        $conexao =  Conexaobd::pegarConexao();
        $query = "SELECT id, categoria, marca, modelo, placa, ano, cor, status, cpf, assegurado FROM tb_veiculos WHERE status = 'Alugado'";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    /* métodos Listar veiculos do CPF---------------------------------------------------------------------------------------------------------*/
    public function listarCPF(){
        $conexao =  Conexaobd::pegarConexao();
        $query = "SELECT * FROM tb_veiculos WHERE cpf LIKE '%$cpf%'";    //arrumar essa query
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    /* métodos Listar 1categoria -----------------------------------------------------------------------------------------------------------*/
    public function listar1Categoria($id){
        $conexao =  Conexaobd::pegarConexao();
        $query = "SELECT id, categoria, marca, modelo, placa, ano, cor, status, cpf, assegurado FROM tb_veiculos WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            return $linha;
        }
    }

    /* métodos Criar -----------------------------------------------------------------------------------------------------------*/
    public function inserir($categoria, $marca, $modelo, $placa, $ano, $cor, $status, $cpf, $assegurado){
        $conexao =  Conexaobd::pegarConexao();
        $query="INSERT INTO tb_veiculos (categoria, marca, modelo, placa, ano, cor, status, cpf, assegurado) VALUES('".$categoria."','".$marca."','".$modelo."','".$placa."','".$ano."','".$cor."','".$status."','".$cpf."','".$assegurado."')";
        $conexao->exec($query);
    }

    /* métodos alterar -----------------------------------------------------------------------------------------------------------*/
    public function alterar($id, $categoria, $marca, $modelo, $placa, $ano, $cor){
        $conexao =  Conexaobd::pegarConexao();
        $query = "UPDATE tb_veiculos SET categoria = '".$categoria."',marca = '".$marca."', modelo = '".$modelo."', placa = '".$placa."', ano = '".$ano."', cor = '".$cor."' WHERE id = " . $id;
        $conexao->exec($query);
    }

    /* métodos alterar DISPONIVEL-----------------------------------------------------------------------------------------------------------*/
    public function alterarStatusD($id){
        $conexao =  Conexaobd::pegarConexao();
        $query = "UPDATE tb_veiculos SET status = 'Disponivel' WHERE id = " . $id;
        $conexao->exec($query);
    }
    /* métodos alterar DISPONIVEL-----------------------------------------------------------------------------------------------------------*/
    public function alterarAssegurado($id){
        $conexao =  Conexaobd::pegarConexao();
        $query = "UPDATE tb_veiculos SET assegurado = 'Não' WHERE id = " . $id;
        $conexao->exec($query);
    }
    /* métodos alterar DISPONIVEL -----------------------------------------------------------------------------------------------------------*/
    public function alterarcpf($id){
        $conexao =  Conexaobd::pegarConexao();
        $query = "UPDATE tb_veiculos SET cpf = 'NULL' WHERE id = " . $id;
        $conexao->exec($query);
    }
    /* métodos alterar DISPONIVEL -----------------------------------------------------------------------------------------------------------*/
    public function alterarStatusA($id){
        $conexao =  Conexaobd::pegarConexao();
        $query = "UPDATE tb_veiculos SET status = 'Alugado' WHERE id = " . $id;
        $conexao->exec($query);
    }

    /* métodos excluir -----------------------------------------------------------------------------------------------------------*/
    public function excluir($id){
        $conexao =  Conexaobd::pegarConexao();
        $query = "DELETE FROM tb_veiculos WHERE id = " . $id;
        $conexao->exec($query);
    }
}