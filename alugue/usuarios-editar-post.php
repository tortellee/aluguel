<?php
require_once 'classes\Usuarios.php';
$id = $_POST['id'];
$tipo = $_POST['tipo'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$data = $_POST['data'];
$categoria = new Usuarios();
$categoria->alterar($id, $tipo, $login, $senha, $nome, $telefone, $cpf, $cidade, $bairro, $rua, $numero, $data);
header('Location:admin_usuarios.php');
?>
