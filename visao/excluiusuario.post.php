<?php
require('../modelo/usuario.class.php');

$usuario = new Usuario();
$usuario->setCodigo($_GET['codigo']);

if ($usuario->excluir() == true)
{
	echo 'Cliente excluido com sucesso';
	header('location:menu.frm.php');
}

?>