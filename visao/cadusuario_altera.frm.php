<?php
require('../modelo/usuario.class.php');

$usuario = new Usuario();
$usuario->setCodigo($_GET['codigo']);
$usuario->getUsuarioPorCodigo();

?>
<html>
	<head>
		<title>Altera&ccedil;&atilde;o de Usuario</title>
	</head>
	<body>
		<form method="post" action="cadusuario.post.php" enctype="multipart/form-data">
			<input type="hidden" name="hddCodigo" value="<?php echo $usuario->getCodigo(); ?>" />
			<table border="1px" width="300px" cellspacing="4px" cellpadding="5px">
				<tr>
					<td colspan="2">Altera&ccedil;&atilde;o de Usuario</td>
				</tr>
				<tr> 
					<td>Login:</td>
					<td>
					
					<input type="text" 
						   size="100"
						   name="txtLogin" 
					       value="<?php echo $usuario->getLogin(); ?>"/>
					
					</td>
				</tr>
				<tr> 
					<td>Senha:</td>
					<td>
					
					<input type="text" 
						   size="100"
						   name="txtSenha" 
					       value="<?php echo $usuario->getSenha(); ?>"/>
					
					</td>
				</tr>
				<tr> 
					<td>
					
					<?php echo '<img width="100px" height="100px" src="'.$usuario->getFoto().'">' ?>
					
					</td>
					<td>
					<input type="file" size="100" name="fleArquivo" />
					</td>
					
				</tr>
				<tr> 
					<td colspan="2">
						<table border="1px" width="100%">
							<td align="right" width="70%">
								<button type="reset" name="btnApagar">Apagar</button>
							</td>
							<td align="right" width="30%">
								<button type="submit" name="btnEnviar" value="alterar">Alterar</button>
							</td>
						</table>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>