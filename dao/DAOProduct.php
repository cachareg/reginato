<?php
	include "Connection.php";
	include "../model/Product.php";
	include "DAOFabrica.php";

	Class DAOProduct{


		public function getAllProduct(){
			$produtos[]=array(); 
			$connection = mysql_connect("localhost", "root", "");
			mysql_select_db("reginato");
			$sql= "select * FROM product";
			$result=mysql_query($sql, $connection);
			mysql_close($connection);
			while ($row = mysql_fetch_object($result)) {
				//var_dump($row);
			    $product = new Product();
			    $product->setId($row->id+0);

			   // echo "id: ".$product->getId();
			    //var_dump($row->id);
			    $product->setNome($row->nome);
			    if($row->lancamento){
			    	$product->setLancamento(true);
			    }else{
			    	$product->setLancamento(false);
			    }
			    if($row->ativo){
			    	$product->setAtivo(true);
			    }else{
			    	$product->setAtivo(false);
			    }
			    $daof = new DAOFabrica();
			    $fabrica =$daof->buildFabrica($row->id_fabrica);
			    $product->setFabrica($fabrica);
			    //var_dump($product);
			    array_unshift($produtos, $product);
			}
			return $produtos;
		}
	}
?>