<html>
	<head>
		<title>Cadastro de Usuario</title>
	</head>
	<body>
		<form method="post" action="cadusuario.post.php" enctype="multipart/form-data">
			<table border="1px" width="300px" cellspacing="4px" cellpadding="5px">
				<tr>
					<td colspan="2">Cadastro de Usuario</td>
				</tr>
				<tr> 
					<td>Login:</td>
					<td><input type="text" size="100" name="txtLogin" /></td>
				</tr>
				<tr> 
					<td>Senha:</td>
					<td><input type="password" size="100" name="txtSenha" /></td>
				</tr>
				<tr> 
					<td>Foto:</td>
					<td><input type="file" size="100" name="fleArquivo" /></td>
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