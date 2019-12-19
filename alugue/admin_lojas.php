<?php require_once 'cabecalho_admin.php';
include('verificar-login.php');
require_once 'classes\Lojas.php';
$categoria= new Lojas();
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
<a href="lojas-criar.php" class="btn btn-success">ADICIONAR LOJAS</a>
</div>
<br><br>
<table class="table">
    <thead>
        <td bgcolor="#CDC9C9"><b>ID:</b></td>
        <td bgcolor="#CDC9C9"><b>Nome:</b></td>
        <td bgcolor="#CDC9C9"><b>Rua:</b></td>
        <td bgcolor="#CDC9C9"><b>Número:</b></td>
        <td bgcolor="#CDC9C9"><b>Bairro:</b></td>
        <td bgcolor="#CDC9C9"><b>Cidade:</b></td>
        <td bgcolor="#CDC9C9"><b>Telefone:</b></td>
        <td bgcolor="#CDC9C9"><b>Ações:</b></td>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['rua'];?></td>
            <td><?php echo $linha['numero'];?></td>
            <td><?php echo $linha['bairro'];?></td>
            <td><?php echo $linha['cidade'];?></td>
            <td><?php echo $linha['telefone'];?></td>
            <td>
                <a href="lojas-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">ALTERAR</a>
                <a href="lojas-excluir-get.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">EXCLUIR</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
