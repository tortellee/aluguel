<?php
require_once 'classes\Veiculos.php';
$categoria = new Veiculos();
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$ano = $_POST['ano'];
$cor = $_POST['cor'];
$categoria->inserir($marca, $modelo, $placa, $ano, $cor);
header('Location:veiculos.php');
?>
