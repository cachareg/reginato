<?php
	require_once("../model/Fabrica.php");

	Class DAOFabrica{

		public function buildFabrica($id){

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

		public function getAllFabricas(){
			$fabricas[]=array(); 
			$connection = mysqli_connect("localhost", "root", "", "reginato");
			mysql_set_charset('utf8');
			$sql= "select * FROM fabrica";
			$result=mysqli_query( $connection, $sql);
			mysqli_close($connection);
			$fabrica;

			while ($row = mysqli_fetch_object($result)) {
				$fabrica = new Fabrica();
				$fabrica->setId($row->id);
				$fabrica->setNome($row->nome);
				
				array_unshift($fabricas, $fabrica);
			}
			//var_dump($caracteristicas);
			return $fabricas;
			
		}
	}
?>