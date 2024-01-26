<?php
require('../modelo/cliente.class.php');

$cliente = new Cliente();
$cliente->setCodigo($_GET['codigo']);
$cliente->getClientePorCodigo();

?>

<html>
	<head>
		<title>Altera&ccedil;&atilde;o de Cliente</title>
	</head>
	<body>
		<form method="post" action="cadcliente.post.php" enctype="multipart/form-data">
			<input type="hidden" name="hddCodigo" value="<?php echo $cliente->getCodigo(); ?>" />
			<table border="1px" width="300px" cellspacing="4px" cellpadding="5px">
				<tr>
					<td colspan="2">Cadastro de Cliente</td>
				</tr>
				<tr> 
					<td>Nome:</td>
					<td>
					
					<input type="text" 
						   size="100"
						   name="txtNome" 
					       value="<?php echo $cliente->getNome(); ?>"/>
					
					</td>
				</tr>
				<tr> 
					<td>Email:</td>
					<td>
					
					<input type="text" 
						   size="100"
						   name="txtEmail" 
					       value="<?php echo $cliente->getEmail(); ?>"/>
					
					</td>
				</tr>
				<tr> 
					<td>Idade:</td>
					<td>
					
					<input type="text" 
						   size="100"
						   name="txtIdade" 
					       value="<?php echo $cliente->getIdade(); ?>"/>
					
					</td>
				</tr>
				<tr> 
					<td>Telefone:</td>
					<td>
					
					<input type="text" 
						   size="100"
						   name="txtTelefone" 
					       value="<?php echo $cliente->getTelefone(); ?>"/>
					
					</td>
				</tr>
				<tr> 
					<td>Filme:</td>
					<td>
					       <?php 
						   if($cliente->getFilme()=="acao"){
						   echo '
						   <select name="slcFilme">
									<option value="romance">romance</option>
									<option value="suspense">suspense</option>
									<option value="acao" selected="select">a&ccedil;&atilde;o</option>
							</select>
						   ';
						   }
						   else if($cliente->getFilme()=="romance"){
							echo '
							<select name="slcFilme">
									<option value="romance" selected="select">romance</option>
									<option value="suspense">suspense</option>
									<option value="acao" >a&ccedil;&atilde;o</option>
							</select>
						   ';
						   }
						   else{
							   echo '
							<select name="slcFilme">
									<option value="romance" >romance</option>
									<option value="suspense" selected="select">suspense</option>
									<option value="acao" >a&ccedil;&atilde;o</option>
							</select>
						   ';
						   }
						   ?>
					
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