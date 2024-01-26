<html>
	<head>
		<title>Cadastro de Cliente</title>
	</head>
	<body>
		<form method="post" action="cadcliente.post.php" enctype="multipart/form-data">
			<table border="1px" width="300px" cellspacing="4px" cellpadding="5px">
				<tr>
					<td colspan="2">Cadastro de Cliente</td>
				</tr>
				<tr> 
					<td>Nome:</td>
					<td><input type="text" size="100" name="txtNome" /></td>
				</tr>
				<tr> 
					<td>Email:</td>
					<td><input type="text" size="100" name="txtEmail" /></td>
				</tr>
				<tr> 
					<td>Idade:</td>
					<td><input type="text" size="100" name="txtIdade" /></td>
				</tr>
				<tr> 
					<td>Telefone:</td>
					<td><input type="text" size="100" name="txtTelefone" /></td>
				</tr>
				<tr>
					<td>Filme Preferido</td>
					<td>
						<select name="slcFilme">
									<option value="romance">romance</option>
									<option value="suspense">suspense</option>
									<option value="acao">a&ccedil;&atilde;o</option>
						</select>
					</td>
				</tr>
				<tr> 
					<td colspan="2">
						<table border="1px" width="100%">
							<td align="right" width="70%">
								<button type="reset" name="btnApagar">Apagar</button>
							</td>
							<td align="right" width="30%">
								<button type="submit" name="btnEnviar" value="salvar">Salvar</button>
							</td>
						</table>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>