<?php
require('../modelo/cliente.class.php');

$cliente = new Cliente();
$cliente->setNome($_POST['txtNome']);
$cliente->setEmail($_POST['txtEmail']);
$cliente->setIdade($_POST['txtIdade']);
$cliente->setTelefone($_POST['txtTelefone']);
$cliente->setFilme($_POST['slcFilme']);

$resposta = false;
if ($_POST['btnEnviar'] == 'salvar')
{
	$resposta = $cliente->salvar();
}
else
{
	$cliente->setCodigo($_POST['hddCodigo']);
	$resposta = $cliente->alterar();
}

if ($resposta == true)
{
	echo 'Opera&ccedil&atilde;o executado com sucesso!<br>';
	echo '<a href="menu.frm.php">VOLTAR</a>';
}
?>