<?php require_once 'cabecalho_admin.php';
include('verificar-login.php');
require_once 'classes\Categoria.php';
$categoria= new Categoria();
$lista = $categoria->listar();
?>
<DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
  <head>
      <meta charset='utf-8'>
      <title>Alugue - Já</title>

<div align="center">
<img src="imagens/alugue.png">
<br><br>
</div>
<div align="center">
<a href="categorias-criar.php" class="btn btn-success">ADICIONAR CATEGORIA</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="admin_veiculos.php" class="btn btn-warning">ADICIONAR VEÍCULOS</a><br><br>
<label>Primeiro adicione a categoria e depois os veículos.</label>
</div>

<br><br>
<table class="table">

    <thead>
        <td bgcolor="#CDC9C9"><b>ID:</b></td>
        <td bgcolor="#CDC9C9"><b>Tipo:</b></td>
        <td bgcolor="#CDC9C9"><b>Ações:</b></td>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['tipo'];?></td>
            <td>
                <a href="categorias-excluir-get.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">EXCLUIR</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
