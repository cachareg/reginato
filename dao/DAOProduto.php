<?php
	include "Connection.php";
	include "../model/Produto.php";
	include "DAOFabrica.php";



	Class DAOProduto{

		public function inserirProduto($produto){
            $connection = mysqli_connect("localhost", "root", "", "reginato");
            $sql= "insert into produto (nome, lancamento, ativo, id_fabrica) values('".$produto->getNome()."', ".$produto->getLancamento().", ".$produto->getAtivo().", ".$produto->getFabrica()->getId().")";
           //echo $sql;
            mysqli_query($connection, $sql);
            $produto->setId(mysqli_insert_id($connection));
            $categorias = $produto->getCategorias();
            foreach ($categorias as $current) {
            	if($current->isSubcategoria()){
            		$sql= "insert into produto_subcategoria (id_produto, id_subcategoria) values(".$produto->getId().", ".$current->getId().")";
            	}else{
            		$sql= "insert into produto_categoria (id_produto, id_categoria) values(".$produto->getId().", ".$current->getId().")";
            	}
            	//echo($sql);
            	mysqli_query($connection, $sql);
            }
            $caracteristicas = $produto->getCaracteristicas();
            foreach ($caracteristicas as $current) {
            	$sql= "insert into produto_caracteristica (id_produto, id_caracteristica) values(".$produto->getId().", ".$current->getId().")";
            	//echo $sql;
            	mysqli_query($connection, $sql);
            }
            $valores = $produto->getValores();
            foreach ($valores as $current) {
            	$sql= "insert into valor (nome, id_caracteristica, id_produto) values('".$current->getNome()."', ".$current->getCaracteristica()->getId().", ".$produto->getId().")";
            	//echo $sql;
            	mysqli_query($connection, $sql);
            }
            $fotos = $produto->getFotos();
            foreach ($fotos as $current) {
            	$sql= "insert into foto_produto (nome, id_produto) values('".$current->getCaminho()."', ".$produto->getId().")";
            	//echo $sql;
            	mysqli_query($connection, $sql);
            }
            $fotosCaracteristicas = $produto->getFotosCaracteristica();
            foreach ($fotosCaracteristicas as $current) {
            	$sql= "insert into produto_foto_caracteristica (id_foto, id_produto) values(".$current->getId().", ".$produto->getId().")";
            	//echo $sql;
            	mysqli_query($connection, $sql);
            }
        }


		public function getAllProdutos(){
			
			$produtos[]=array(); 
			$connection = mysqli_connect("localhost", "root", "", "reginato");
			$sql= "select * FROM produto";
			$result=mysqli_query( $connection, $sql);
			//mysqli_close($connection);
			$product;
			while ($row = mysqli_fetch_object($result)) {
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
			    
			    $sql2= "select nome, categoria.id from produto_categoria join categoria on (produto_categoria.id_categoria=categoria.id)  where id_produto = ".$product->getId()."";
				$result2=mysqli_query( $connection, $sql2);
				

				while ($row1 = mysqli_fetch_object($result2)) {

					$categoria = new Categoria();
					$categoria->setNome($row1->nome);
					$categoria->setId($row1->id);
					$product->addCategoria($categoria);
				}
				
				$sql2= "select nome, subcategoria.id from produto_subcategoria join subcategoria on (produto_subcategoria.id_subcategoria=subcategoria.id)  where id_produto = ".$product->getId();
				$result3=mysqli_query( $connection, $sql2);
				
				while ($row2 = mysqli_fetch_object($result3)) {

					$categoria = new Categoria();
					$categoria->setNome($row2->nome);
					$categoria->setId($row2->id);
					$product->addCategoria($categoria);
				}
			    //print_r($product);
			    array_unshift($produtos, $product);

			}

			mysqli_close($connection);
			return $produtos;
		}
	}
?>