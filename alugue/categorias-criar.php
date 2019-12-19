<?php require_once 'cabecalho_admin.php';
include('verificar-login.php');
?>

<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
  <head>
      <meta charset='utf-8'>
      <title>Alugue - Já</title>
      <div align="center">
      <img src="imagens/alugue.png">
      <br><br>
      <u><h3>ADICIONAR CATEGORIA</h3></u>
<form name="nova-categoria" method="post" action="categorias-criar-post.php">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group" align = "left">
                <br>
                <label>ESCOLHA A CATEGORIA DESEJADA: </label>
                <select name="tipo">
                  <option name="tipo" value="<img src= imagens/carros/caminhao.png width=60px>&nbsp;&nbsp;CARRO">Carro</option>
                  <option name="tipo" value="<img src= imagens/carros/moto.png width=60px>&nbsp;&nbsp;MOTO">Moto</option>
                  <option name="tipo" value="<img src= imagens/carros/onibus.png width=60px>&nbsp;&nbsp;ONIBUS">Onibus</option>
                  <option name="tipo" value="<img src= imagens/carros/trator.png width=60px>&nbsp;&nbsp;TRATOR">Trator</option>
                  <option name="tipo" value="<img src= imagens/carros/caminhao.png width=60px>&nbsp;&nbsp;CAMINHÃO">Caminhao</option>
                  <option name="tipo" value="<img src= imagens/carros/iate.png width=60px>&nbsp;&nbsp;IATE">Iate</option>
                  <option name="tipo" value="<img src= imagens/carros/helicoptero.png width=60px>&nbsp;&nbsp;HELICÓPTERO">Helicóptero</option>
                  <option name="tipo" value="<img src= imagens/carros/jato.png width=60px>&nbsp;&nbsp;JATO">Jato</option>
                </select>
                <br><br>
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
    <div align="right">
      <?php require_once 'rodape.php'; ?>
    </div>
</form>
