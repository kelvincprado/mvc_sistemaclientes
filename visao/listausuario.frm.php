<html>
<head>
	<title>Lista de Clientes</title>
	<style>
			table {
				width:100%;
			}
			table, th, td {
				border: 1px solid black;
				border-collapse: collapse;
			}
			th, td {
				padding: 5px;
				text-align: left;
			}
			table#t01 tr:nth-child(even) {
				background-color: #eee;
			}
			table#t01 tr:nth-child(odd) {
			   background-color:#fff;
			}
			table#t01 th {
				background-color: black;
				color: white;
			}
            img {
                width: 25px;
                height: 25px;
            }
            th{
                background-color: red;
            }
		</style>
</head>
<body>
	<?php
		require ('../modelo/usuario.class.php');
		$usuario = new usuario();
		echo $usuario->listaUsuario();
	?>
</body>
</html>