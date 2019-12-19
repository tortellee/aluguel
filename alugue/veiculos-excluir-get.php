<?php
    $id_excluir = $_GET['CODIGO'];
    require_once 'classes\Veiculos.php';
    $excluir = new Veiculos();
    $excluir->excluir($id_excluir);
    header('Location:admin_veiculos.php');
    ?>
