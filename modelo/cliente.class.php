<?php
require('../controle/dao.class.php');

class Cliente
	{
		private $codigo;
		private $nome;
		private $email;
		private $idade;
		private $telefone;
		private $filme;
		
		public function setFilme($valor)
		{
			$this->filme = $valor;
		}
		
		public function getFilme()
		{
			return $this->filme;
		}
		
		/*---------------------------------------------------------------------------------------------*/
		public function setTelefone($valor)
		{
			$this->telefone = $valor;
		}
		
		public function getTelefone()
		{
			return $this->telefone;
		}
		
		/*---------------------------------------------------------------------------------------------*/
		public function setIdade($valor)
		{
			$this->idade = $valor;
		}
		
		public function getIdade()
		{
			return $this->idade;
		}
		
		/*---------------------------------------------------------------------------------------------*/
		public function setNome($valor)
		{
			$this->nome = $valor;
		}
		
		public function getNome()
		{
			return $this->nome;
		}
		
		/*---------------------------------------------------------------------------------------------*/
		public function setEmail($valor)
		{
			$this->email = $valor;
		}
		
		public function getEmail()
		{
			return $this->email;
		}
		
		/*---------------------------------------------------------------------------------------------*/
		public function setCodigo($valor)
		{
			$this->codigo = $valor;
		}
		
		public function getCodigo()
		{
			return $this->codigo;
		}
		
		/*---------------------------------------------------------------------------------------------*/
		public function getClientePorCodigo()
		{
			$sql = 'SELECT * FROM tb_cliente WHERE id_cliente='.$this->codigo.';';
			
			$acessobanco = new DAO();
			$tabela = $acessobanco->executaSQL($sql);
			
			while ($linha = mysqli_fetch_row ($tabela))
			{
				$this->nome = $linha[1];
				$this->email = $linha[2];
				$this->idade = $linha[3];
				$this->telefone = $linha[4];
				$this->filme = $linha[5];
			}
		}
		
		/*---------------------------------------------------------------------------------------------*/
		public function alterar()
		{
			$sql = 'UPDATE tb_cliente SET nome_cliente="' . $this->nome . '",
								  email_cliente="' . $this->email . '",
								  idade_cliente="' . $this->idade . '",
								  telefone_cliente="' . $this->telefone . '",
								  filme_cliente="' . $this->filme . '"
								  WHERE id_cliente=' . $this->codigo . ';';
								  
			$acessobanco = new DAO();
			$sucesso = $acessobanco->executaSQL($sql);
			return $sucesso;
		}
		
		/*---------------------------------------------------------------------------------------------*/
		public function salvar()
		{
			$sql = 'INSERT INTO tb_cliente(nome_cliente, email_cliente,idade_cliente,telefone_cliente, filme_cliente) 
	        VALUES ("' . $this->nome . '","' . $this->email . '","'. $this->idade . '","' . $this->telefone . '", "' . $this->filme . '")';
			
			$acessobanco = new DAO();
			$sucesso = $acessobanco->executaSQL($sql);
			return $sucesso;
		}
		
		/*---------------------------------------------------------------------------------------------*/
		public function listaCliente()
		{
			$sql="SELECT * FROM tb_cliente;";
			$acessobanco = new DAO();
			$tabela = $acessobanco->executaSQL($sql);
			
			$html=' 
				<table class="w3-table-all">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nome</th>
							<th>Email</th>
							<th>Idade</th>
							<th>Telefone</th>
							<th>Filme Preferido</th>
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
								<td>'.$linha[3].'</td>
								<td>'.$linha[4].'</td>
								<td>'.$linha[5].'</td>
								<td><center><a href="cadcliente_altera.frm.php?codigo='.$linha[0].'"><img src="../visao/imagens/lapis.png"></a></center></td>
								<td><center><a href="excluicliente.post.php?codigo='.$linha[0].'"><img src="../visao/imagens/excluir.png"></a></center></td>
							</tr>';
					}
			$html.= '</table>';
			return $html;
		}
		
		/*---------------------------------------------------------------------------------------------*/
		public function excluir()
		{
			$sql = 'DELETE FROM tb_cliente WHERE id_cliente=' . $this->codigo . ';';
			
			$acessobanco = new DAO();
			$sucesso = $acessobanco->executaSQL($sql);
			return $sucesso;
		}
	}
?>