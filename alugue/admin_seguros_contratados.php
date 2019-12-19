<?php require_once 'cabecalho_admin.php';
include('verificar-login.php');
require_once 'classes\CadastrarSeguros.php';
$categoria= new CadastrarSeguros();
$lista = $categoria->listarStatusContratado();
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
      <u><h3>LISTA DE CONTRATOS DE SEGUROS</h3></u>
</div>
<br><br>
<table class="table">
    <thead>
        <td bgcolor="#CDC9C9"><b>ID:</b></td>
        <td bgcolor="#CDC9C9"><b>Nome do seguro:</b></td>
        <td bgcolor="#CDC9C9"><b>Tempo do seguro:</b></td>
        <td bgcolor="#CDC9C9"><b>Tipo do seguro:</b></td>
        <td bgcolor="#CDC9C9"><b>Valor:</b></td>
        <td bgcolor="#CDC9C9"><b>CPF:</b></td>
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
            <td><?php echo $linha['cpf'];?></td>
            <td>

                <a href="seguros-alterar-status-post-admin.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">QUEBRAR CONTRADO</a>

                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
