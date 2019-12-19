<?php
require_once 'classes\Seguros.php';
$categoria = new Seguros();
$nome_seguro = $_POST['nome_seguro'];
$tempo_seguro = $_POST['tempo_seguro'];
$tipo_seguro = $_POST['tipo_seguro'];
$nome_assegurado = $_POST['nome_assegurado'];
$placa_assegurado = $_POST['placa_assegurado'];
$cpf_assegurado = $_POST['cpf_assegurado'];
$cadastrado = $_POST['cadastrado'];
$categoria->inserir($nome_seguro, $tempo_seguro, $tipo_seguro, $nome_assegurado, $placa_assegurado, $cpf_assegurado, $cadastrado);
header('Location:admin_seguros.php');
?>
