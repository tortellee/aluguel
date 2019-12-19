<?php
require_once 'classes\Veiculos.php';
$criar = new Veiculos();
$categoria = $_POST['categoria'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$ano = $_POST['ano'];
$cor = $_POST['cor'];
$status = $_POST['status'];
$cpf = $_POST['cpf'];
$assegurado = $_POST['assegurado'];
$criar->inserir($categoria, $marca, $modelo, $placa, $ano, $cor, $status, $cpf, $assegurado);
header('Location:admin_veiculos.php');
?>
