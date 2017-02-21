<?php
	include "../model/Categoria.php";

	Class DAOCategoria{

		
		public function getAllCategorias(){
			$categorias[]=array(); 
			$connection = mysqli_connect("localhost", "root", "", "reginato");
			mysql_set_charset('utf8');
			$sql= "select * FROM categoria";
			$result=mysqli_query( $connection, $sql);
			mysqli_close($connection);
			$categoria;

			while ($row = mysqli_fetch_object($result)) {
				$categoria = new Categoria();
				$categoria->setId($row->id);
				$categoria->setNome($row->nome);
				
				array_unshift($categorias, $categoria);
			}
			//var_dump($caracteristicas);
			return $categorias;
			
		}
	}
?>