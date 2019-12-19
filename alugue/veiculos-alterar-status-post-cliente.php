<?php
    $id_status = $_GET['CODIGO'];
    require_once 'classes\Veiculos.php';
    $categoria = new Veiculos();
    $categoria->alterarStatusD($id_status);
    $categoria->alterarcpf($id_status);
    $categoria->alterarAssegurado($id_status);
    header('Location:cliente_veiculos_alugados.php');
    ?>
