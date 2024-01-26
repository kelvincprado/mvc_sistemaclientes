<?php
	class DAO
	{
		private $host;
		private $usuario;
		private $senha;
		private $banco;
		private $conexao;
		
		public function __construct()
		{
			$this->conexao = '';
			$this->host = 'localhost';
			$this->usuario ='root';
			$this->senha ='';
			$this->banco ='bd_cli';
		}
		
		/*---------------------------------------------------------------------------------------------*/
		public function setHost($valor)
		{
			$this->host = $valor;
		}
		public function getHost()
		{
			return $this->host;
		}
		
		/*---------------------------------------------------------------------------------------------*/
		public function setUsuario($valor)
		{
			$this->usuario = $valor;
		}
		
		public function getUsuario()
		{
			return $this->usuario;
		}
		
		/*---------------------------------------------------------------------------------------------*/
		public function setSenha($valor)
		{
			$this->senha = $valor;
		}
		
		public function getSenha()
		{
			return $this->senha;
		}
		
		/*---------------------------------------------------------------------------------------------*/
		public function setBanco($valor)
		{
			$this->banco = $valor;
		}
		
		public function getBanco()
		{
			return $this->banco;
		}
		
		/*---------------------------------------------------------------------------------------------*/
		public function abreConexao()
		{
			$this->conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->banco);
		}
		
		public function executaSQL($sql)
		{
			$this->abreConexao();
			$resultado = mysqli_query($this->conexao, $sql);
			return $resultado;
		}
	}

?>