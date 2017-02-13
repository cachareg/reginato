<?php
	include "Connection.php";
	include "../model/Produto.php";
	include "DAOFabrica.php";

	Class DAOProduto{


		public function getAllProdutos($categorias, $subcategorias){
			$produtos[]=array(); 
			$connection = mysql_connect("localhost", "root", "");
			mysql_select_db("reginato");

			$sql= "select * FROM produto";
			if($categorias!=null && count($categorias)>0){
				$sql=$sql." join produto_categoria ";
			}
			if($subcategorias!=null && count($subcategorias)>0){
				$sql=$sql." join produto_subcategoria ";
			}

			if(($categorias!=null && count($categorias)>0) || ($subcategorias!=null && count($subcategorias)>0)){
				$sql=$sql." WHERE ";
			}

			if($categorias!=null && count($categorias)>0){

				$clause="(";
				foreach($categorias as $categoria) {
					if(end($categorias)==$categoria){
						$clause=$clause.strval($categoria).")";
					}else{
						$clause=$clause.strval($categoria).", ";
					}
				}
				
				$sql=$sql." id_categoria in ".$clause;
			}

			if($subcategorias!=null && count($subcategorias)>0){
				if($categorias!=null && count($categorias)>0){
					$sql=$sql." OR ";
				}
				$clause="(";
				foreach($subcategorias as $subcategoria) {
					if(end($subcategorias)==$subcategoria){
						$clause=$clause.strval($subcategoria).")";
					}else{
						$clause=$clause.strval($subcategoria).", ";
					}
				}
				
				$sql=$sql." id_subcategoria in ".$clause;
			}
			
			$sql=$sql." group by produto.id";

			$result=mysql_query($sql, $connection);
			mysql_close($connection);
			while ($row = mysql_fetch_object($result)) {
			    $product = new Produto();
			    $product->setId($row->id+0);
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
			    array_unshift($produtos, $product);
			}
			return $produtos;
		}
	}
?>