<?php require_once 'cabecalho_admin.php';
include('verificar-login.php');
require_once 'classes\Veiculos.php';
$categoria= new Veiculos();
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
      <a href="veiculos-criar.php" class="btn btn-success">ADICIONAR VEICULOS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="admin_veiculos_alugados.php" class="btn btn-warning">VEICULOS ALUGADOS</a>
</div>
<br><br>
<table class="table">
    <thead>
        <td bgcolor="#CDC9C9"><b>ID:</b></td>
        <td bgcolor="#CDC9C9"><b>Categoria:</b></td>
        <td bgcolor="#CDC9C9"><b>Marca:</b></td>
        <td bgcolor="#CDC9C9"><b>Modelo:</b></td>
        <td bgcolor="#CDC9C9"><b>Placa:</b></td>
        <td bgcolor="#CDC9C9"><b>Ano:</b></td>
        <td bgcolor="#CDC9C9"><b>Cor:</b></td>
        <td bgcolor="#CDC9C9"><b>Alugado:</b></td>
        <td bgcolor="#CDC9C9"><b>Seguro:</b></td>
        <td bgcolor="#CDC9C9"><b>CPF:</b></td>        
        <td bgcolor="#CDC9C9"><b>Ações:</b></td>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['categoria'];?></td>
            <td><?php echo $linha['marca'];?></td>
            <td><?php echo $linha['modelo'];?></td>
            <td><?php echo $linha['placa'];?></td>
            <td><?php echo $linha['ano'];?></td>
            <td><?php echo $linha['cor'];?></td>
            <td><?php echo $linha['status'];?></td>
            <td><?php echo $linha['assegurado'];?></td>
            <td><?php echo $linha['cpf'];?></td>

            <td>
                <a href="veiculos-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">ALTERAR</a>
                <a href="veiculos-excluir-get.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">EXCLUIR </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
