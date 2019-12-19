<?php require_once 'cabecalho.php';
require_once 'classes\Veiculos.php';
$categoria= new Veiculos();
$lista = $categoria->listar();
?>
<div align="center">
<img src="imagens/alugue.png">
<br><br>
<u><h3>VEÍCULOS</h3></u>
<div align="center">
<a href="veiculos-criar.php" class="btn btn-success">ADICIONAR VEÍCULOS</a>
<br><br>
</div>
<br>
<table class="table">
    <thead>
        <th>ID:</th>
        <th>MARCA:</th>
        <th>MODELO:</th>
        <th>PLACA:</th>
        <th>ANO:</th>
        <th>COR:</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['marca'];?></td>
            <td><?php echo $linha['modelo'];?></td>
            <td><?php echo $linha['placa'];?></td>
            <td><?php echo $linha['ano'];?></td>
            <td><?php echo $linha['cor'];?></td>
            <td>
                <a href="veiculos-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Alterar</a>
                <a href="veiculos-excluir-get.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
