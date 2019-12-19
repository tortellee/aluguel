<?php
require_once 'classes\Conexaobd.php';
/*nome da classe*/
class CadastrarSeguros{

    /*atributos*/
    public $id;
    public $nome_seguro;
    public $tempo_seguro;
    public $tipo_seguro;
    public $valor;
    public $cpf;
    public $assegurado;
    public $curtidas;
    public $descurtidas;


    /* métodos */
    public function listar(){
        $conexao =  Conexaobd::pegarConexao();
        $query = "SELECT id, nome_seguro, tempo_seguro, tipo_seguro, valor, cpf, assegurado FROM tb_seguros_empresa";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Categoria($id){
        $conexao =  Conexaobd::pegarConexao();
        $query = "SELECT id, nome_seguro, tempo_seguro, tipo_seguro, valor, cpf, assegurado  FROM tb_seguros_empresa WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha){
            return $linha;
        }
    }

    public function inserir($nome_seguro, $tempo_seguro, $tipo_seguro, $valor, $cpf, $assegurado){
        $conexao =  Conexaobd::pegarConexao();
        $query="INSERT INTO tb_seguros_empresa(nome_seguro, tempo_seguro, tipo_seguro, valor, cpf, assegurado) VALUES('".$nome_seguro."','".$tempo_seguro."','".$tipo_seguro."','".$valor."','".$cpf."','".$assegurado."')";
        $conexao->exec($query);
    }

    public function alterar($id, $nome_seguro, $tempo_seguro, $tipo_seguro, $valor, $cpf, $assegurado){
        $conexao =  Conexaobd::pegarConexao();
        $query = "UPDATE tb_seguros_empresa SET nome_seguro = '".$nome_seguro."', tempo_seguro = '".$tempo_seguro."', tipo_seguro = '".$tipo_seguro."', valor = '".$valor."', cpf = '".$cpf."', assegurado = '".$assegurado."' WHERE id = " . $id;
        $conexao->exec($query);


    }
    public function excluir($id){
        $conexao =  Conexaobd::pegarConexao();
        $query = "DELETE FROM tb_seguros_empresa WHERE id = id = " . $id;;
        $conexao->exec($query);
    }
    /* métodos Listar Status -----------------------------------------------------------------------------------------------------------*/
    public function listarStatusContratado(){
        $conexao =  Conexaobd::pegarConexao();
        $query = "SELECT * FROM tb_seguros_empresa WHERE assegurado = 'Sim'";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    /* métodos alterar cpf -----------------------------------------------------------------------------------------------------------*/
    public function alterarCpfN($id){
        $conexao =  Conexaobd::pegarConexao();
        $query = "UPDATE tb_seguros_empresa SET cpf = '' WHERE id = " . $id;
        $conexao->exec($query);
    }
    /* métodos alterar assegurado ------------------------------------------------------------------------------------------------------*/
    public function alterarAsseguradoN($id){
        $conexao =  Conexaobd::pegarConexao();
        $query = "UPDATE tb_seguros_empresa SET assegurado = 'Não' WHERE id = " . $id;
        $conexao->exec($query);
    }
    /* métodos alterar Like -------------------------------------------------------------------------------------------------------------*/
    public function curtidas($id)
    {
        $conexao =  Conexaobd::pegarConexao();
        $query = "UPDATE tb_seguros_empresa SET curtidas = curtidas + 1 WHERE id = " . $id;
        $conexao->exec($query);
    }
    /* métodos alterar Deslike -----------------------------------------------------------------------------------------------------------*/
    public function descurtidas($id){
        $conexao =  Conexaobd::pegarConexao();
        $query = "UPDATE tb_seguros_empresa SET descurtidas = descurtidas + 1 WHERE id = " . $id;
        $conexao->exec($query);
    }

        /* métodos Assegurado Não */
        public function listarNao(){
        $conexao =  Conexaobd::pegarConexao();
        $query = "SELECT id, nome_seguro, tempo_seguro, tipo_seguro, valor, cpf, assegurado, curtidas, descurtidas FROM tb_seguros_empresa WHERE assegurado = 'Não'";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

}
