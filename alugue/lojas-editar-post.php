<?php
require_once 'classes\Lojas.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$categoria = new Lojas();
$categoria->alterar($id, $nome, $rua, $numero, $bairro, $cidade, $telefone);
header('Location:admin_lojas.php');

?>
