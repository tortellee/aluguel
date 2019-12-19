<?php require_once 'cabecalho_admin.php';
include('verificar-login.php');?>
<meta charset='utf-8'>
<title>Alugue - Já</title>
<div align="center">
<img src="imagens/alugue.png">
<br><br>
<u><h3>ADICIONAR ADMINISTRADOR</h3></u>
</div>
<br>
<form name="nova-categoria" method="post" action="usuarios-criar-post.php">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <br>
                <input type="hidden" maxlength="30" class="form-control" placeholder="tipo:" name="tipo" value="administrador" required>
                <input type="hidden" maxlength="30" class="form-control" placeholder="tipo:" name="data" value="" required>

                <br>
                <label for="nome">Login:</label>
                <input maxlength="30" class="form-control" placeholder="Login:" name="login" required>

                <br>
                <label for="nome">Senha:</label>
                <input maxlength="30" class="form-control" placeholder="Senha:" name="senha" required>

                <br>
                <label for="nome">Nome:</label>
                <input maxlength="30" class="form-control" placeholder="Nome:" name="nome" required>

                <br>
                <label for="nome">Telefone:</label>
                <input maxlength="9" class="form-control" placeholder="Telefone Ex: 000000000" name="telefone" pattern="[0-9]{9}" required>

                <br>
                <label for="nome">CPF:</label>
                <input maxlength="14" class="form-control" placeholder="CPF Ex:000-000-000-00:" name="cpf" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{2}" required>

                <br>
                <label for="nome">Cidade:</label>
                <input maxlength="30" class="form-control" placeholder="Cidade:" name="cidade" required>

                <br>
                <label for="nome">Bairro:</label>
                <input maxlength="30" class="form-control" placeholder="Bairro:" name="bairro" required>

                <br>
                <label for="nome">Rua:</label>
                <input maxlength="30" class="form-control" placeholder="Rua:" name="rua" required>

                <br>
                <label for="nome">Número:</label>
                <input maxlength="30" class="form-control" placeholder="Número:" name="numero" required>
                <input type="hidden" maxlength="30" class="form-control"  name="data" required>


            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
    <div align="right">
      <?php require_once 'rodape.php'; ?>
    </div>
</form>
