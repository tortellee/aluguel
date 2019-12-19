<?php
include('verificar-login.php');
$id = $_GET['CODIGO'];
require_once 'cabecalho_admin.php';
require_once 'classes\Usuarios.php';
$categoria = new Usuarios();
$linha = $categoria->listar1Categoria($id);
?>
<form name="alterar-categoria" action="usuarios-editar-post.php" method="post">
  <meta charset='utf-8'>
  <title>Alugue - Já</title>
  <div align="center">
  <img src="imagens/alugue.png">
  <br><br>
  <u><h3>ALTERAR USUÁRIOS</h3></u>
  </div>
  <br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">

                <input type="hidden" class="form-control" placeholder="id:" name="id" required value="<?php echo $id;?>">
                <br>

                <label>Login:</label>
                <input maxlength="30" class="form-control" placeholder="Login:" name="login" required value="<?php echo $linha['login'];?>">

                <br>
                <label>Nome:</label>
                <input maxlength="30" class="form-control" placeholder="Nome:" name="nome" required value="<?php echo $linha['nome'];?>">

                <br>
                <label>Telefone:</label>
                <input maxlength="9" class="form-control" placeholder="Telefone:" name="telefone" required value="<?php echo $linha['telefone'];?>">

                <br>
                <label>CPF:</label>
                <input maxlength="14" class="form-control" placeholder="CPF:" name="cpf" required value="<?php echo $linha['cpf'];?>">

                <br>
                <label>Cidade:</label>
                <input maxlength="30" class="form-control" placeholder="Cidade:" name="cidade" required value="<?php echo $linha['cidade'];?>">

                <br>
                <label>Bairro:</label>
                <input maxlength="30" class="form-control" placeholder="Bairro:" name="bairro" required value="<?php echo $linha['bairro'];?>">

                <br>
                <label>Rua:</label>
                <input maxlength="30" class="form-control" placeholder="Rua:" name="rua" required value="<?php echo $linha['rua'];?>">

                <br>
                <label>Número:</label>
                <input maxlength="30" class="form-control" placeholder="Número:" name="numero" required value="<?php echo $linha['numero'];?>">

                <br>
                <label>Tipo da conta: "Não pode ser alterado"</label>
                <input maxlength="30" class="form-control" name="tipo" readonly required value="<?php echo $linha['tipo'];?>">
                
                <br>
                <label>Data do cadastro: "Não pode ser alterado"</label>
                <input maxlength="30" class="form-control" name="data" readonly required value="<?php echo $linha['data'];?>">

            </div>
            <br>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">

</form>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
<?php?>
