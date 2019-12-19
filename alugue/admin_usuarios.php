<?php require_once 'cabecalho_admin.php';
include('verificar-login.php');
require_once 'classes\Usuarios.php';
$categoria= new Usuarios();
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
      <a href="usuarios-criar.php" class="btn btn-success">ADICIONAR ADMINISTRADOR</a>
</div>
<br><br>
<table class="table">
    <thead>
        <td bgcolor="#CDC9C9"><b>ID:</b></td>
        <td bgcolor="#CDC9C9"><b>Tipo:</b></td>
        <td bgcolor="#CDC9C9"><b>Login:</b></td>
        <td bgcolor="#CDC9C9"><b>Nome:</b></td>
        <td bgcolor="#CDC9C9"><b>Telefone:</b></td>
        <td bgcolor="#CDC9C9"><b>CPF:</b></td>
        <td bgcolor="#CDC9C9"><b>Cidade:</b></td>
        <td bgcolor="#CDC9C9"><b>Bairro:</b></td>
        <td bgcolor="#CDC9C9"><b>Rua:</b></td>
        <td bgcolor="#CDC9C9"><b>Número:</b></td>
        <td bgcolor="#CDC9C9"><b>Cadastrado:</b></td>
        <td bgcolor="#CDC9C9"><b>Ações:</b></td>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['tipo'];?></td>
            <td><?php echo $linha['login'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['telefone'];?></td>
            <td><?php echo $linha['cpf'];?></td>
            <td><?php echo $linha['cidade'];?></td>
            <td><?php echo $linha['bairro'];?></td>
            <td><?php echo $linha['rua'];?></td>
            <td><?php echo $linha['numero'];?></td>
            <td><?php echo $linha['data'];?></td>
            <td>
                <a href="usuarios-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Alterar</a><br>
                <a href="usuarios-excluir-get.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
