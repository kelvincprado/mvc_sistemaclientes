<?php
require('../controle/dao.class.php');

class Usuario
	{
		private $codigo;
		private $login;
		private $senha;
		private $foto;
		
		public function setLogin($valor)
		{
			$this->login = $valor;
		}
		public function getLogin()
		{
			return $this->login;
		}
		public function setSenha($valor)
		{
			$this->senha= $valor;
		}
		public function getSenha()
		{
			return $this->senha;
		}
		public function setFoto($valor)
		{
			$this->foto= $valor;
		}
		public function getFoto()
		{
			return $this->foto;
		}
		public function setCodigo($valor)
		{
			$this->codigo = $valor;
		}
		
		public function getCodigo()
		{
			return $this->codigo;
		}
		
		public function getUsuarioPorCodigo()
		{
			$sql = 'SELECT * FROM tb_usuario WHERE id_usuario='.$this->codigo.';';
			
			$acessobanco = new DAO();
			$tabela = $acessobanco->executaSQL($sql);
			
			while ($linha = mysqli_fetch_row($tabela))
			{
				$this->login = $linha[1];
				$this->senha = $linha[2];
				$this->foto = $linha[3];
			}
		}
		public function alterar()
		{
			$sql = 'UPDATE tb_usuario SET login_usuario="' . $this->login . '",
								  senha_usuario="' . $this->senha . '",
								  foto_usuario="' . $this->foto . '"
								  WHERE id_usuario=' . $this->codigo . ';';
								  
			$acessobanco = new DAO();
			$sucesso = $acessobanco->executaSQL($sql);
			return $sucesso;
		}
		public function salvar()
		{
			$sql = 'INSERT INTO tb_usuario(login_usuario, senha_usuario,foto_usuario) 
	        VALUES ("' . $this->login . '","' . $this->senha . '","'. $this->foto . '")';
			
			$acessobanco = new DAO();
			$sucesso = $acessobanco->executaSQL($sql);
			return $sucesso;
		}
		public function listaUsuario()
		{
			$sql="SELECT * FROM tb_usuario;";
			$acessobanco = new DAO();
			$tabela = $acessobanco->executaSQL($sql);
			
			$html=' 
				<table class="w3-table-all">
					<thead>
						<tr>
							<th>ID</th>
							<th>Login</th>
							<th>Senha</th>
							<th>Foto</th>
							<th><center>Alterar</center></th>
							<th><center>Excluir</center></th>
						</tr>
					</thead>';
					while ($linha = mysqli_fetch_row ($tabela))
					{
						$html.='<tr>
								<td>'.$linha[0].'</td>
								<td>'.$linha[1].'</td>
								<td>'.$linha[2].'</td>
								<td><img src="'.$linha[3].'" width="100px" height="100px"></td>
								<td><center><a href="cadusuario_altera.frm.php?codigo='.$linha[0].'"><img src="../visao/imagens/lapis.png"></a></center></td>
								<td><center><a href="excluiusuario.post.php?codigo='.$linha[0].'"><img src="../visao/imagens/excluir.png"></a></center></td>
							</tr>';
					}
			$html.= '</table>';
			return $html;
		}
		
		public function excluir()
		{
			$sql = 'DELETE FROM tb_usuario WHERE id_usuario=' . $this->codigo . ';';
			
			$acessobanco = new DAO();
			$sucesso = $acessobanco->executaSQL($sql);
			return $sucesso;
		}
	}