<?php
	require_once("../model/Fabrica.php");

	Class DAOFabrica{

		public function buildFabrica($id){

			$connection = mysql_connect("localhost", "root", "");
			mysql_select_db("reginato");
			$sql= "select * FROM Fabrica WHERE id=".$id;
			$result=mysql_query($sql, $connection);
			$row = mysql_fetch_object($result);
			$fabrica = new Fabrica();
			$fabrica->setId($row->id);
			$fabrica->setNome($row->nome);
			$fabrica->setAtivo(false);
			return $fabrica;
		}

		public function inserirFabrica($fabrica){
			$connection = mysqli_connect("localhost", "root", "", "reginato");
            $sql= "insert into fabrica (nome ) values('".$fabrica->getNome()."') ";
            //echo($sql);
            return mysqli_query($connection, $sql);
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
				$fabrica->setAtivo(true);
				
				array_unshift($fabricas, $fabrica);
			}
			//var_dump($caracteristicas);

			return $fabricas;
			
		}
	}
?>