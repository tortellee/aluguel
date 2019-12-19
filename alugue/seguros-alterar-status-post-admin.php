<?php
    $id_status = $_GET['CODIGO'];
    require_once 'classes\CadastrarSeguros.php';
    $categoria = new CadastrarSeguros();
    $categoria->alterarCpfN($id_status);
    $categoria->alterarAsseguradoN($id_status);
    header('Location:admin_seguros_contratados.php');
    ?>
