<?php
session_start();
include ('conexao.php');
//codigo contra bug do navegador
if(empty($_POST['login']) && empty($_POST['senha']))
{
  header('Location: error404.php');
  exit();
}

$login = mysqli_real_escape_string($conectar, $_POST['login']);
$senha = mysqli_real_escape_string($conectar, $_POST['senha']);
$cpf = mysqli_real_escape_string($conectar, $_POST['cpf']);


$procurar_bd = "select tipo from tb_usuarios where login = '{$login}' and senha ='{$senha}' and cpf ='{$cpf}'";

$resultado_tipo = mysqli_query($conectar, $procurar_bd);
$linhas_tipo = mysqli_num_rows($resultado_tipo);

if($linhas_tipo == 1)
  {
	while ($procurar_tipo = mysqli_fetch_array($resultado_tipo))
	{
		$tipo = $procurar_tipo['tipo'];

		if($tipo == 'usuario')
		{
			$_SESSION['login'] = $login;
        header('Location: cliente_veiculos_alugados.php');
		}

		if($tipo == 'administrador')
		{
			$_SESSION['login'] = $login;
		  	header('Location: dados_invalidos.php');
		}

	}
}
else
{
  header('Location: dados_invalidos.php');
  exit();
}
?>
