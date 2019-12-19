<?php require_once 'cabecalho_usuario.php';
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
<u><h3>LOJAS FILIAIS E SUAS INFORMAÇÕES</h3></u>
</div>
<br><br>
<table class="table">
    <thead>
        <td bgcolor="#CDC9C9"><b>Nome:</b></td>
        <td bgcolor="#CDC9C9"><b>Rua:</b></td>
        <td bgcolor="#CDC9C9"><b>Número:</b></td>
        <td bgcolor="#CDC9C9"><b>Bairro:</b></td>
        <td bgcolor="#CDC9C9"><b>Cidade:</b></td>
        <td bgcolor="#CDC9C9"><b>Telefone:</b></td>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['rua'];?></td>
            <td><?php echo $linha['numero'];?></td>
            <td><?php echo $linha['bairro'];?></td>
            <td><?php echo $linha['cidade'];?></td>
            <td><?php echo $linha['telefone'];?></td>
            <td>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
