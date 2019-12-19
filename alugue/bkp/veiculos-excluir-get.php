<?php
    $id_excluir = $_GET['CODIGO'];
    require_once 'classes\Veiculos.php';
    $categoria = new Veiculos();
    $categoria->excluir($id_excluir);
    header('Location:veiculos.php');
    ?>
