<?php
    $id_status = $_GET['CODIGO'];
    require_once 'classes\CadastrarSeguros.php';
    $categoria = new CadastrarSeguros();
    $categoria->descurtidas($id_status);
    header('Location:usuario-seguros.php');
    ?>
