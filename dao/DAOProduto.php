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
            	echo $sql;
            	mysqli_query($connection, $sql);
            }
            $fotosCaracteristicas = $produto->getFotosCaracteristica();
            foreach ($fotosCaracteristicas as $current) {
            	$sql= "insert into produto_foto_caracteristica (id_foto, id_produto) values(".$current->getId().", ".$produto->getId().")";
            	mysqli_query($connection, $sql);
            }
            mysqli_close($connection);
            return $produto->getId();
        }

        public function inserirFotosProduto($produto){
        	$connection = mysqli_connect("localhost", "root", "", "reginato");
        	$fotos = $produto->getFotos();
            foreach ($fotos as $current) {
            	$sql= "insert into foto_produto (nome, id_produto) values('".$current->getCaminho()."', ".$produto->getId().")";
            	//echo $sql;
            	mysqli_query($connection, $sql);
            }
            mysqli_close($connection);
        }

        public function getCaracteristicasProduto($id){
        	$connection = mysqli_connect("localhost", "root", "", "reginato");
        	$product = new Produto();
			$product->setId($id);
			$sql = "select * from produto where produto.id = ". $id;
			$result=mysqli_query($connection, $sql);
			$row = mysqli_fetch_object($result);
			$product->nome= $row->nome;
        	$sql = "select caracteristica.id as id_car, caracteristica.nome as nome_car, caracteristica.valoresSelecionadosPorFoto as por_foto from produto_caracteristica join caracteristica on (produto_caracteristica.id_caracteristica = caracteristica.id) where produto_caracteristica.id_produto =".$id;
        	$result=mysqli_query($connection, $sql);
        	while ($row = mysqli_fetch_object($result)) {
			    $caracteristica = new Caracteristica();
			    $caracteristica->setId($row->id_car);
			    $caracteristica->setNome($row->nome_car);
			    if($row->por_foto==1){
			    	$caracteristica->setValoresSelecionadosPorFoto(true);
			    }
			    else{
			    	$caracteristica->setValoresSelecionadosPorFoto(false);
			    }
			    $sql = "select * from valor where id_produto = ".$id." and id_caracteristica = ".$caracteristica->getId();
			    $result2=mysqli_query($connection, $sql);
			    while ($row2 = mysqli_fetch_object($result2)) {
			    	$valor = new Valor();
			    	$valor->setNome($row2->nome);
			    	$caracteristica->addValor($valor);
			    }
			    $sql = "select * from produto_foto_caracteristica join foto_caracteristica on (produto_foto_caracteristica.id_foto=foto_caracteristica.id_foto) where id_produto = ".$id;
			    $result3=mysqli_query($connection, $sql);
			    while ($row3 = mysqli_fetch_object($result3)) {
			    	$foto_carac= new FotoCaracteristica();
			    	$foto_carac->setNome($row3->nome);
			    	$foto_carac->setHint($row3->hint);
			    	$caracteristica->addFoto($foto_carac);
			    }
			    $product->addCaracteristica($caracteristica);
			}    
			return $product;    	
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
					$categoria->setSubcategoria(false);
					$product->addCategoria($categoria);
				}
				
				$sql2= "select nome, subcategoria.id from produto_subcategoria join subcategoria on (produto_subcategoria.id_subcategoria=subcategoria.id)  where id_produto = ".$product->getId();
				$result3=mysqli_query( $connection, $sql2);
				
				while ($row2 = mysqli_fetch_object($result3)) {

					$categoria = new Categoria();
					$categoria->setNome($row2->nome);
					$categoria->setId($row2->id);
					$categoria->setSubcategoria(true);
					$product->addCategoria($categoria);
				}
				$sql3= "select nome from foto_produto where id_produto = ".$product->getId();
				$result4=mysqli_query( $connection, $sql3);
				
				while ($row3 = mysqli_fetch_object($result4)) {

					$product->addFoto($row3->nome);
				}
			    array_unshift($produtos, $product);

			}

			mysqli_close($connection);
			return $produtos;
		}
	}
?>