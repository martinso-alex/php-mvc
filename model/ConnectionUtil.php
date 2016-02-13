<?php

class ConnectionUtil {
	
	function __construct() {
		// parametros de conexao		
		$hostname = 'localhost';
		$username = 'root';
		$password = 'veriwicows';
		$database = 'bd - educacao';
		
		$this->conn = mysql_connect($hostname, $username, $password)
		or die (mysql_error());

		$this->comm = mysql_select_db($database, $this->conn)
		or die (mysql_error());		

	}
	
	public static function executar($sql) {
		$connection = new ConnectionUtil();	
		mysql_query($sql, $connection->conn);
		$connection->fecharConexao();
	}
	
	public static function executarSelect($sql) {
		$connection = new ConnectionUtil();	
		
		$connection->query = mysql_query($sql, $connection->conn);
		$resultset = $connection->query;
		$connection->fecharConexao();
		$i = 0;
		while ($linha = mysql_fetch_array($resultset)){
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
		
		$connection->con = mysql_num_rows($sql);
		return $this->con;
	}

	public function fecharConexao() {
		
		return mysql_close($this->conn);			
	}
}
?>
