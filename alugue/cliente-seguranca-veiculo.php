<?php require_once 'cabecalho_usuario.php';
include('verificar-login.php');?>
<meta charset='utf-8'>
<title>Alugue - Já</title>
<div align="center">
<img src="imagens/alugue.png">
<br><br>
<u><h3>VERIFICAR CARROS ALUGADOS</h3></u>
</div>
<br>
<form name="nova-categoria" method="post" action="cliente-seguranca-veiculo-cpf.php">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <br>
                <div align="center"
                <u><h4>Para sua segurança informe seu LOGIN, SENHA e CPF.</h4></u>
                </div>
                <br>
                <label for="nome">LOGIN:</label>
                <input maxlength="30" class="form-control" placeholder="Senha:" name="login" required>
                <br>
                <label for="nome">SENHA:</label>
                <input maxlength="30" class="form-control" placeholder="Senha:" name="senha" required>
                <br>
                <label for="nome">CPF:</label>
                <input maxlength="14" class="form-control" placeholder="CPF: 000-000-000-00" name="cpf" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{2}" required>
                <br>
                <input type="submit" class="btn btn-success btn-block" value="CHECAR SENHA E CPF">



            </div>

        </div>
    </div>
    <div align="right">
      <?php require_once 'rodape.php'; ?>
    </div>
</form>
