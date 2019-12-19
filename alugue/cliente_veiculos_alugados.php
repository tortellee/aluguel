<?php require_once 'cabecalho_usuario.php';
include('verificar-login.php');
require_once 'classes\Veiculos.php';
$categoria= new Veiculos();
$lista = $categoria->listarCPF();
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
      <u><h3>MEUS VEICULOS ALUGADOS</h3></u>
</div>
<br><br>
<table class="table">
    <thead>
        <td bgcolor="#CDC9C9"><b>Categoria:</b></td>
        <td bgcolor="#CDC9C9"><b>Marca:</b></td>
        <td bgcolor="#CDC9C9"><b>Modelo:</b></td>
        <td bgcolor="#CDC9C9"><b>Placa:</b></td>
        <td bgcolor="#CDC9C9"><b>Ano:</b></td>
        <td bgcolor="#CDC9C9"><b>Cor:</b></td>
        <td bgcolor="#CDC9C9"><b>Alugado:</b></td>
        <td bgcolor="#CDC9C9"><b>CPF:</b></td>
        <td bgcolor="#CDC9C9"><b>Ações:</b></td>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['categoria'];?></td>
            <td><?php echo $linha['marca'];?></td>
            <td><?php echo $linha['modelo'];?></td>
            <td><?php echo $linha['placa'];?></td>
            <td><?php echo $linha['ano'];?></td>
            <td><?php echo $linha['cor'];?></td>
            <td><?php echo $linha['status'];?></td>
            <td><?php echo $linha['cpf'];?></td>
            <td>

                <a href="veiculos-alterar-status-post-cliente.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">DEVOLVER</a>
                <a href="cliente-seguros-criar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-success">ASSINAR SEGURO</a>

                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
