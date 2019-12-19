<?php
require_once 'classes\Veiculos.php';
$id = $_POST['id'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$ano = $_POST['ano'];
$cor = $_POST['cor'];
$categoria = new Veiculos();
$categoria->alterar($id, $marca, $modelo, $placa, $ano, $cor);
header('Location:veiculos-editar.php');
?>
