<?php
require_once 'classes\Categoria.php';
$id = $_POST['id'];
$categoria = new Categoria();
$categoria->alterar($id);
header('Location:admin_categorias.php');

?>
