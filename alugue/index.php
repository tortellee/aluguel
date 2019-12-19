<?php
require_once 'cabecalho.php'
?>
<script src="assets/js/personalizado.js"></script>
<DOCTYPE html>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<html>
  <head>
      <meta charset='utf-8'>
      <title>Alugue - Já</title>
<div class="row">
    <div class="col-md-12">
      <div align="center">
      <img src="imagens/alugue.png">
  <br><br><br><br>
<h3>ÁREA DE LOGIN</h3>
<form action="login.php" method="POST">
  <input class="tb5" name="login" type="text" placeholder=" Login:" required>
    <br><br>
      <input class="tb5" name="senha" type="password" placeholder=" Senha:" required>
        <br><br>
      <input type="submit" value="ENTRAR" class="btn btn-success"> <br>
</form>
    <br>






<form action="cliente-criar-usuario.php" method="POST">
      <input type="submit" value="CADASTRAR" class="btn btn-primary">

</form>





      <h5><a href="recuperar-senha.php">Esqueci minha senha?</a></h5>

<br><br><br><br>
  <img src="imagens/carro.png">
<br><br>
</div>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
<?php ?>
