<?php require_once 'cabecalho_admin.php';
include('verificar-login.php');?>
<meta charset='utf-8'>
<title>Alugue - Já</title>
<div align="center">
<img src="imagens/alugue.png">

<br><br>
<u><h3>ADICIONAR VEÌCULOS</h3></u>
</div>
<br>
<form name="nova-categoria" method="post" action="veiculos-criar-post.php">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <br>
                
                <label>Categoria:</label>
                <input maxlength="30" class="form-control" placeholder="Categoria:" name="categoria" required>

                <br>
                <label>Marca:</label>
                <input maxlength="30" class="form-control" placeholder="Marca:" name="marca" required>

                <br>
                <label>Modelo:</label>
                <input maxlength="30" class="form-control" placeholder="Modelo:" name="modelo" required>

                <br>
                <label>Placa:</label>
                <input maxlength="30" class="form-control" placeholder="Placa:" name="placa" required>

                <br>
                <label>Ano:</label>
                <input maxlength="10" class="form-control" placeholder="Ano" name="ano" required>

                <br>
                <label>Cor:</label>
                <input maxlength="30" class="form-control" placeholder="Cor:" name="cor" required>
                <input type="hidden" maxlength="30" class="form-control" name="status" required value="Disponivel">
                <input type="hidden" maxlength="30" class="form-control" name="cpf" required>
                <input type="hidden" maxlength="30" class="form-control" name="assegurado" required value="Não">

            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
    <div align="right">
      <?php require_once 'rodape.php'; ?>
    </div>
</form>
