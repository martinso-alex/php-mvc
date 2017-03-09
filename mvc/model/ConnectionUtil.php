<?php

class ConnectionUtil {
	
	function __construct() {
		// parametros de conexao		
		$hostname = 'localhost';
		$username = 'root';
		$password = '1234';
		$database = 'martinso';

		header('Content-Type: text/html; charset=utf-8');
		
		$this->conn = mysqli_connect($hostname, $username, $password, $database)
		or die (mysqli_connect_error());

		mysqli_query($this->conn, "SET NAMES 'utf8'");
		mysqli_query($this->conn, 'SET character_set_connection=utf8');
		mysqli_query($this->conn, 'SET character_set_client=utf8');
		mysqli_query($this->conn, 'SET character_set_results=utf8');

	}
	
	public static function executar($sql) {
		$connection = new ConnectionUtil();	
		mysqli_query($connection->conn, $sql);
		$connection->fecharConexao();
	}
	
	public static function executarSelect($sql) {
		$connection = new ConnectionUtil();	
		
		$connection->query = mysqli_query($connection->conn, $sql);
		$resultset = $connection->query;
		$connection->fecharConexao();
		$i = 0;
		while ($linha = mysqli_fetch_array($resultset)){
			$array[$i] = $linha;
			$i++;
		}
		if ($i == 0){
			return null;
		}
		else{ 
			return $array;
		}
	}

	public static function numeroLinhas($sql) {
		$connection = new ConnectionUtil();
		
		$connection->con = mysqli_num_rows($sql);
		return $this->con;
	}

	public function fecharConexao() {
		
		return mysqli_close($this->conn);			
	}
}

?>