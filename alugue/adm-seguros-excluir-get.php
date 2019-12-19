<?php
    $id_excluir = $_GET['CODIGO'];
    require_once 'classes\CadastrarSeguros.php';
    $categoria = new CadastrarSeguros();
    $categoria->excluir($id_excluir);
    header('Location:admin_seguros.php');
    ?>
