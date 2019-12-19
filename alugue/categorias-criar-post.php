<?php
require_once 'classes\Categoria.php';
$categoria = new Categoria();
$tipo= $_POST['tipo'];
$categorias = $_POST['categorias'];
$descricao = $_POST['descricao'];
$categoria->inserir($tipo, $categorias ,$descricao);
header('Location:admin_categorias.php');
?>
