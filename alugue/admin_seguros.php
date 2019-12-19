<?php require_once 'cabecalho_admin.php';
include('verificar-login.php');
require_once 'classes\CadastrarSeguros.php';
$categoria= new CadastrarSeguros();
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
<a href="adm-seguros-criar.php" class="btn btn-success">ADICIONAR SEGUROS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin_seguros_contratados.php" class="btn btn-warning">SEGUROS CONTRATADOS</a>
</div>
<br><br>
<table class="table">
    <thead>
        <td bgcolor="#CDC9C9"><b>ID:</b></td>
        <td bgcolor="#CDC9C9"><b>Nome seguro:</b></td>
        <td bgcolor="#CDC9C9"><b>Tempo do seguro:</b></td>
        <td bgcolor="#CDC9C9"><b>Tipo do seguro:</b></td>
        <td bgcolor="#CDC9C9"><b>Valor:</b></td>
        <td bgcolor="#CDC9C9"><b>Ações:</b></td>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome_seguro'];?></td>
            <td><?php echo $linha['tempo_seguro'];?></td>
            <td><?php echo $linha['tipo_seguro'];?></td>
            <td><?php echo $linha['valor'];?></td>
            <td>
                <a href="adm-seguros-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">ALTERAR NOME</a>
                <a href="adm-seguros-excluir-get.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">EXCLUIR</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
