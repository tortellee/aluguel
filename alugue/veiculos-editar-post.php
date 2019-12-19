<?php
require_once 'classes\Veiculos.php';
$id = $_POST['id'];
$categoria = $_POST['categoria'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$ano = $_POST['ano'];
$cor = $_POST['cor'];
$status = $_POST['status'];
$editar = new Veiculos();
$editar->alterar($id, $categoria, $marca, $modelo, $placa, $ano, $cor, $status);
header('Location:admin_veiculos.php');
?>
