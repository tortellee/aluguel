<?php
include('verificar-login.php');
$id = $_GET['CODIGO'];
require_once 'cabecalho_admin.php';
require_once 'classes\Lojas.php';
$categoria = new Lojas();
$linha = $categoria->listar1Categoria($id);
?>
<form name="alterar-categoria" action="lojas-editar-post.php" method="post">
  <meta charset='utf-8'>
  <title>Alugue - Já</title>
  <div align="center">
  <img src="imagens/alugue.png">
  <br><br>
  <u><h3>ALTERAR LOJAS</h3></u>
  </div>
  <br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">

                <input type="hidden" class="form-control" placeholder="id:" name="id" required value="<?php echo $id;?>"
                <br><br>
                <label for="nome">Nome:</label>
                <input maxlength="30" class="form-control" placeholder="Nome:" name="nome" required value="<?php echo $linha['nome'];?>"

                <br><br>
                <label for="nome">Rua:</label>
                <input maxlength="30" class="form-control" placeholder="Rua:" name="rua" required value="<?php echo $linha['rua'];?>"

                <br><br>
                <label for="nome">Número:</label>
                <input maxlength="30" class="form-control" placeholder="Número:" name="numero" required value="<?php echo $linha['numero'];?>"

                <br><br>
                <label for="nome">Bairro:</label>
                <input maxlength="30" class="form-control" placeholder="Bairro:" name="bairro" required value="<?php echo $linha['bairro'];?>"

                <br><br>
                <label for="nome">Cidade:</label>
                <input maxlength="30" class="form-control" placeholder="Cidade:" name="cidade" required value="<?php echo $linha['cidade'];?>"

                <br><br>
                <label for="nome">Telefone:</label>
                <input maxlength="30" class="form-control" placeholder="Telefone:" name="telefone" required value="<?php echo $linha['telefone'];?>"


            </div>
            <br>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">

</form>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
<?php?>
