<?php
include('verificar-login.php');
$id = $_GET['CODIGO'];
require_once 'cabecalho_admin.php';
require_once 'classes\Veiculos.php';
$editar = new Veiculos();
$linha = $editar->listar1Categoria($id);

?>
<form name="alterar-categoria" action="veiculos-editar-post.php" method="post">
  <meta charset='utf-8'>
  <title>Alugue - Já</title>
  <div align="center">
  <img src="imagens/alugue.png">
  <br><br>
  <u><h3>ALTERAR VEÍCULOS</h3></u>
  </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">

                <input type="hidden" class="form-control" placeholder="id:" name="id" required value="<?php echo $id;?>"><br>
                <label>Categoria:</label>
                <input maxlength="30" class="form-control" placeholder="Categoria:" name="categoria" required value="<?php echo $linha['categoria'];?>"><br>

                <label>Marca:</label>
                <input maxlength="30" class="form-control" placeholder="Marca:" name="marca" required value="<?php echo $linha['marca'];?>"><br>

                <label>Modelo:</label>
                <input maxlength="30" class="form-control" placeholder="Modelo:" name="modelo" required value="<?php echo $linha['modelo'];?>"><br>

                <label>Placa:</label>
                <input maxlength="30" class="form-control" placeholder="Placa:" name="placa" required value="<?php echo $linha['placa'];?>"><br>

                <label>Ano:</label>
                <input maxlength="30" class="form-control" placeholder="Ano:" name="ano" required value="<?php echo $linha['ano'];?>"><br>

                <label>Cor:</label>
                <input maxlength="30" class="form-control" placeholder="Cor:" name="cor" required value="<?php echo $linha['cor'];?>"><br>

                <label>Status: "Não pode ser alterarado"</label>
                <input maxlength="30" class="form-control" name="status" readonly required value="<?php echo $linha['status'];?>"><br>
            </div>
            <br>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">

</form>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
<?php?>
