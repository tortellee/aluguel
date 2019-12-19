<?php require_once 'cabecalho_admin.php';
include('verificar-login.php');?>
<meta charset='utf-8'>
<title>Alugue - Já</title>
<div align="center">
<img src="imagens/alugue.png">
<br><br>
<u><h3>ADICIONAR LOJAS</h3></u>
</div>
<br>
<form name="nova-categoria" method="post" action="lojas-criar-post.php">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <br>
                <label for="nome">Nome:</label>
                <input maxlength="30" class="form-control" placeholder="Nome:" name="nome" required>

                <br>
                <label for="nome">Rua:</label>
                <input maxlength="30" class="form-control" placeholder="Rua:" name="rua" required>

                <br>
                <label for="nome">Número:</label>
                <input maxlength="30" class="form-control" placeholder="Número:" name="numero" required>

                <br>
                <label for="nome">Bairro:</label>
                <input maxlength="30" class="form-control" placeholder="Bairro:" name="bairro" required>

                <br>
                <label for="nome">Cidade:</label>
                <input maxlength="30" class="form-control" placeholder="Cidade:" name="cidade" required>

                <br>
                <label for="nome">Telefone:</label>
                <input maxlength="30" class="form-control" placeholder="Telefone:" name="telefone" required>

            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
    <div align="right">
      <?php require_once 'rodape.php'; ?>
    </div>
</form>
