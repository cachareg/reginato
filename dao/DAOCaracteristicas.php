<?php
	include "../model/Caracteritica.php";

	Class DAOCaracteristica{

		function getCaracteristicasPorProduto($id){

			$connection = mysql_connect("localhost", "root", "");
			mysql_select_db("reginato");
			//echo "id = "+$id;
			$sql= "select * FROM caracteristica join produto_caracteristica on (caracteristica.id=produto_caracteristica.id_caracteristica)  WHERE id_produto=".$id;
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