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
				$categoria->setSubcategoria(false);	
				array_unshift($categorias, $categoria);
			}
			$connection = mysqli_connect("localhost", "root", "", "reginato");
			mysql_set_charset('utf8');
			$sql= "select * FROM subcategoria";
			$result=mysqli_query( $connection, $sql);
			mysqli_close($connection);
			$categoria;

			while ($row = mysqli_fetch_object($result)) {
				$categoria = new Categoria();
				$categoria->setId($row->id);
				$categoria->setNome($row->nome);
				$categoria->setSubcategoria(true);
				$categoria->setSupercategoria($row->id_categoria);
				
				array_unshift($categorias, $categoria);
			}
			return $categorias;
			
		}

		public function inserirSubcategoria($subcategorias, $id_categoria){
			$connection = mysqli_connect("localhost", "root", "", "reginato");
			for($i=0;$i<sizeof($subcategorias); $i++){
				$sql= "insert into subcategoria (nome, id_categoria ) values('".$subcategorias[$i]."', ".$id_categoria.") ";
				//echo ($sql);
				mysqli_query($connection, $sql);
			}
			mysqli_close($connection); 
		}
		public function inserirCategoria($categoria){
			$connection = mysqli_connect("localhost", "root", "", "reginato");
            $sql= "insert into categoria (nome) values('".$categoria->getNome()."') ";
            mysqli_query($connection, $sql);
            return mysqli_insert_id($connection);
		}

		public function buildCategoria($id){

			$connection = mysql_connect("localhost", "root", "");
			mysql_select_db("reginato");
			$sql= "select * FROM Categoria WHERE id=".$id;
			$result=mysql_query($sql, $connection);
			$row = mysql_fetch_object($result);
			$categoria = new Categoria();
			$categoria->setId($row->id);
			$categoria->setNome($row->nome);
			return $categoria;
		}
		public function buildSubcategoria($id){

			$connection = mysql_connect("localhost", "root", "");
			mysql_select_db("reginato");
			$sql= "select * FROM subcategoria WHERE id=".$id;
			$result=mysql_query($sql, $connection);
			$row = mysql_fetch_object($result);
			$categoria = new Categoria();
			$categoria->setId($row->id);
			$categoria->setNome($row->nome);
			$categoria->setSupercategoria($row->id_categoria);
			$categoria->setSubcategoria(true);
			return $categoria;
		}
	}
?>