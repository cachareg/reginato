<?php
	include "../model/Fabrica.php";

	Class DAOFabrica{

		function buildFabrica($id){

			$connection = mysql_connect("localhost", "root", "");
			mysql_select_db("reginato");
			//echo "id = "+$id;
			$sql= "select * FROM Fabrica WHERE id=".$id;
			$result=mysql_query($sql, $connection);
			$row = mysql_fetch_object($result);
			//var_dump($row);
			$fabrica = new Fabrica();
			$fabrica->setId($row->id);
			$fabrica->setNome($row->nome);
			$fabrica->setAtivo(false);
			return $fabrica;
		}
	}
?>