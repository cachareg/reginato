<?php

	Class Conexao{
		

		function __construct() {
       		$connection = mysql_connect("localhost", "root", "");
			return $connection;
   		}


		function desconnect(){
			$connection.close();
		}
	}

?>