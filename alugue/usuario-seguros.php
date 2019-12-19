<?php require_once 'cabecalho_usuario.php';
include('verificar-login.php');
require_once 'classes\CadastrarSeguros.php';
$categoria= new CadastrarSeguros();
$lista = $categoria->listarNao();
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
<u><h3>VERIFICAR SEGUROS E PROMOÇÕES</h3></u>
</div>
<br><br>

<table class="table">

    <thead>
        <td bgcolor="#CDC9C9"><b>Nome do seguro:</b>
        <td bgcolor="#CDC9C9"><b>Tempo do seguro:</b>
        <td bgcolor="#CDC9C9"><b>Tipo de seguro:</b>
        <td bgcolor="#CDC9C9"><b>Valor do seguro:</b>
        <td bgcolor="gren"><b>Like:</b>
        <td bgcolor="red"><b>Deslike:</b>
        <td bgcolor="#CDC9C9"><b>&ensp;Ações:</b>

  <?php foreach($lista as $linha){ ?>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $linha['nome_seguro'];?>
            <td><?php echo $linha['tempo_seguro'];?>
            <td><?php echo $linha['tipo_seguro'];?>
            <td><?php echo $linha['valor'];?></td>
            <td><?php echo $linha['curtidas'];?></td>
            <td><?php echo $linha['descurtidas'];?></td>
            <td><a href="seguros-alterar-curtidas-post-cliente.php?CODIGO=<?php echo $linha['id'];?>"><img src="imagens/like.png" width= 30px height=30px ><a/>
            <a href="seguros-alterar-descurtidas-post-cliente.php?CODIGO=<?php echo $linha['id'];?>"><img src="imagens/deslike.png" width= 30px height=30px ><a/>


        </tr>
        <?php } ?>
    </tbody>


</table>

<br><br>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
