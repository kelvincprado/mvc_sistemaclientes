<?php
require('../modelo/usuario.class.php');

$usuario = new Usuario();
$usuario->setLogin($_POST['txtLogin']);
$usuario->setSenha($_POST['txtSenha']);

$caminhotempfoto = $_FILES['fleArquivo']['tmp_name'];
$caminhofinalfoto = 'imagens/' . $_FILES['fleArquivo']['name'];	
move_uploaded_file($caminhotempfoto, $caminhofinalfoto);

$usuario->setFoto($caminhofinalfoto);


$resposta = false;
if ($_POST['btnEnviar'] == 'salvar')
{
	$resposta = $usuario->salvar();
}
else
{
	$usuario->setCodigo($_POST['hddCodigo']);
	$resposta = $usuario->alterar();
}

if ($resposta == true)
{
	echo 'Opera&ccedil&atilde;o executado com sucesso!<br>';
	echo '<a href="menu.frm.php">VOLTAR</a>';
}
else{
	echo 'Tente novamente mais tarde';

}
?>