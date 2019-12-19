<?php
require_once 'classes\CadastrarSeguros.php';
$id = $_POST['id'];
$nome_seguro = $_POST['nome_seguro'];
$tempo_seguro = $_POST['tempo_seguro'];
$tipo_seguro = $_POST['tipo_seguro'];
$valor = $_POST['valor'];
$cpf = $_POST['cpf'];
$assegurado = $_POST['assegurado'];
$categoria = new CadastrarSeguros();
$categoria->alterar($id, $nome_seguro, $tempo_seguro, $tipo_seguro, $valor, $cpf, $assegurado);
header('Location:admin_seguros.php');
?>
