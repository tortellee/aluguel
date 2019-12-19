<?php
    $id_excluir = $_GET['CODIGO'];
    require_once 'classes\Lojas.php';
    $categoria = new Lojas();
    $categoria->excluir($id_excluir);
    header('Location:admin_lojas.php');
    ?>
