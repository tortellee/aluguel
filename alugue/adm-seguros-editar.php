<?php
include('verificar-login.php');
$id = $_GET['CODIGO'];
require_once 'cabecalho_admin.php';
require_once 'classes\CadastrarSeguros.php';
$categoria = new CadastrarSeguros();
$linha = $categoria->listar1Categoria($id);
?>
<form name="alterar-categoria" action="adm-seguros-editar-post.php" method="post">
  <meta charset='utf-8'>
  <title>Alugue - Já</title>
  <div align="center">
    <img src="imagens/alugue.png">
  <br><br>
  <u><h3>ALTERAR SEGUROS</h3></u>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group" align ="left">

                <input type="hidden" class="form-control" placeholder="Tipo:"name="id" required value="<?php echo $id;?>">
                <br>

                <label for="nome">Nome do seguro:</label>
                <input maxlength="30" class="form-control" placeholder="Nome do seguro:"name="nome_seguro" required value="<?php echo $linha['nome_seguro'];?>">
                <br>

                <label for="nome">Tempo do seguro: "Não pode ser alterado"</label>
                <input readonly maxlength="30" class="form-control" placeholder="Tempo do seguro:"name="tempo_seguro" required value="<?php echo $linha['tempo_seguro'];?>">
                <br>

                <label for="nome">Tipo do seguro: "Não pode ser alterado"</label>
                <br>
                <input readonly maxlength="30" class="form-control" placeholder="Tipo do seguro:"name="tipo_seguro" required value="<?php echo $linha['tipo_seguro'];?>">
                <br>

                <label for="nome">Valor: "Não pode ser alterado"</label>
                <br>
                <input type="hidden" readonly maxlength="30" class="form-control" placeholder="Valor do seguro:"name="valor" required value="<?php echo $linha['valor'];?>">
                <input type="hidden" readonly maxlength="30" class="form-control" placeholder="CPF:"name="cpf" required value="<?php echo $linha['cpf'];?>">
                <input type="hidden" readonly maxlength="30" class="form-control" placeholder="Assegurado do seguro:"name="assegurado" required value="<?php echo $linha['assegurado'];?>">
            </div>
            <br>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">

</form>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
<?php?>
