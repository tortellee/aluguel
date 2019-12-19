<?php
include('verificar-login.php');
$id = $_GET['CODIGO'];
require_once 'cabecalho_admin.php';
require_once 'classes\Categoria.php';
$categoria = new Categoria();
$linha = $categoria->listar1Categoria($id);

?>
<form name="alterar-categoria" action="categorias-editar-post.php" method="post">
  <meta charset='utf-8'>
  <title>Alugue - Já</title>
  <div align="center">
  <img src="imagens/alugue.png">
  <br><br>
  <u><h3>ALTERAR CATEGORIA</h3></u>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group" align ="left">

                <input type="hidden" class="form-control" placeholder="Tipo:"name="id" required value="<?php echo $id;?>">
                <br>          
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">

</form>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
<?php?>
