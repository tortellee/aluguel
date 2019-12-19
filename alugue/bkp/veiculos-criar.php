<?php require_once 'cabecalho.php'; ?>
<meta charset='utf-8'>
<title>Alugue - Já</title>
<div align="center">
<img src="imagens/alugue.png">
<br><br>
<u><h3>ADICIONAR VEÍCULOS</h3></u>
</div>
<form name="nova-categoria" method="post" action="veiculos-criar-post.php">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <br>
                <label for="nome">Marca:</label>
                <input maxlength="30" class="form-control" placeholder="Marca:"name="marca" required>
                <br>
                <label for="nome">Modelo:</label>
                <input maxlength="30" class="form-control" placeholder="Modelo:"name="modelo" required>
                <br>
                <label for="nome">Placa:</label>
                <input maxlength="50" class="form-control" placeholder="Placa:"name="placa" required>
                <br>
                <label for="nome">Ano de fabricação:</label>
                <input maxlength="10" class="form-control" placeholder="Ex: 00/00/0000 "name="ano" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" required>
                <br>
                <label for="nome">Cor:</label>
                <input maxlength="30" class="form-control" placeholder="Cor:"name="cor" required>
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php require_once 'rodape.php'; ?>
