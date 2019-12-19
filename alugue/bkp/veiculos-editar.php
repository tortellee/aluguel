<?php
$id = $_GET['CODIGO'];
require_once 'cabecalho.php';
require_once 'classes\Veiculos.php';
$categoria = new Veiculos();
$linha = $categoria->listar1Categoria($id);
?>
<form name="alterar-categoria" action="veiculos-editar-post.php" method="post">
  <meta charset='utf-8'>
  <title>Alugue - Já</title>
  <div align="center">
  <img src="imagens/alugue.png">
  <br><br>
  <u><h1>ALTERAR VEÍCULOS</h1></u>
  </div>
  <br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">

                <input type="hidden" class="form-control" placeholder="Tipo:" name="id" required value="<?php echo $id;?>"
                <br><br>
                <label for="nome">Marca:</label>
                <input maxlength="30" class="form-control" placeholder="Marca:" name="marca" required value="<?php echo $linha['marca'];?>"
                <br><br>
                <label for="nome">Modelo:</label>
                <input maxlength="30" class="form-control" placeholder="Modelo:" name="modelo" required value="<?php echo $linha['modelo'];?>"
                <br><br>
                <label for="nome">Placa:</label>
                <br>
                <input maxlength="30" class="form-control" placeholder="Placa:" name="placa" required value="<?php echo $linha['placa'];?>"
                <br><br>
                <label for="nome">Ano:</label>
                <br>
                <input maxlength="30" class="form-control" placeholder="Ano:" name="ano" required value="<?php echo $linha['ano'];?>"
                <br><br>
                <label for="nome">Cor:</label>
                <br>
                <input maxlength="30" class="form-control" placeholder="Cor:" name="cor" required value="<?php echo $linha['cor'];?>"
            </div>
            <br>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">

</form>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
<?php?>
