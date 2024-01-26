<?php
require('../modelo/cliente.class.php');

$cliente = new Cliente();
$cliente->setCodigo($_GET['codigo']);

if ($cliente->excluir() == true)
{
	echo 'Cliente excluido com sucesso';
	header('location:menu.frm.php');
}

?>