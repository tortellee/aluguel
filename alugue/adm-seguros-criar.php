<?php require_once 'cabecalho_admin.php';
include('verificar-login.php');
require_once 'classes\CadastrarSeguros.php';
$categoria= new CadastrarSeguros();
$lista = $categoria->listar();
?>

<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
  <head>
      <meta charset='utf-8'>
      <title>Alugue - Já</title>
      <div align="center">
      <img src="imagens/alugue.png">
      <br><br>
      <u><h3>ADICIONAR SEGUROS</h3></u>
<form name="nova-categoria" method="post" action="adm-seguros-criar-post.php">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group" align = left>
              <label>Nome do Seguro:</label>
              <input maxlength="30" class="form-control" placeholder="Nome do Seguro:"name="nome_seguro" required>
              <br>
                <label>Valor do seguro: &ensp;</label>
                <select name="valor" >
                  <option name="valor" value="R$ 500,00" required>R$ 500,00</option>
                  <option name="valor" value="R$ 1,000.00" required>R$ 1,000.00</option>
                  <option name="valor" value="R$ 1,500.00" required>R$ 1,500.00</option>
                  <option name="valor" value="R$ 2,000.00" required>R$ 2,000.00</option>
                  <option name="valor" value="R$ 100,00 / PROMOÇÃO" required>R$ 100,00 / PROMOÇÃO&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;</option>
                </select>
                <br><br>
                <label>Tempo de seguro:</label>
                <select name="tempo_seguro" >
                  <option name="tempo_seguro" value="1 Ano" required>1 Ano&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;</option>
                  <option name="tempo_seguro" value="2 Anos" required>2 Anos</option>
                  <option name="tempo_seguro" value="3 Anos" required>3 Anos</option>
                </select>
                <input type="hidden" maxlength="30" class="form-control" placeholder="Assegurado:"name="assegurado" value="Não"required>
                <br><br>
                <label>Tipo do seguro:&emsp;</label>
                <select name="tipo_seguro" >
                  <option name="tipo_seguro" value="Roubo e Furto" required>Roubo e Furto&emsp;&emsp;&emsp;&emsp;&emsp;</option>
                  <option name="tipo_seguro" value="Seguro Total" required>Seguro Total</option>
                  <option name="tipo_seguro" value="Acidente" required>Acidente</option>
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
