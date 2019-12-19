<?php require_once 'cabecalho_usuario.php';
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
</div>
<div align="center">
<u><h3>ASSINAR SEGUROS</h3></u>

<table class="table">
    <thead>
        <td bgcolor="#CDC9C9"><b>Nome do seguro:</b></td>
        <td bgcolor="#CDC9C9"><b>Tempo do seguro:</b></td>
        <td bgcolor="#CDC9C9"><b>Tipo de seguro:</b></td>
        <td bgcolor="#CDC9C9"><b>Valor do seguro:</b></td>
        <td bgcolor="#CDC9C9"><b>Ações:</b></td>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['nome_seguro'];?></td>
            <td><?php echo $linha['tempo_seguro'];?></td>
            <td><?php echo $linha['tipo_seguro'];?></td>
            <td><?php echo $linha['valor'];?></td>
            <td>
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
