<?php
header('Content-type:application/json');
include "../dao/DAOProduto.php";
include "../dao/DAOCaracteristicas.php";
require_once('../model/Produto.php'); 

if(isset($_GET['action'])) {
    if($_GET['action'] == 'getAllProdutos') {
    	header('Content-type:application/json');
	    $dao = new DAOProduto();
	    $produtos = $dao->getAllProdutos(null, null);
		echo json_encode($produtos);
    }
    if($_GET['action'] == 'getAllProdutosAtivosPorCategoriasSubcategorias') {
    	$categorias= json_decode($_GET['categorias']); 
    	$subcategorias= json_decode($_GET['subcategorias']); 
   		$dao = new DAOProduto();
   		$produtos = $dao->getAllProdutos($categorias,$subcategorias );
   		
   		for($i=0;$i<count($produtos); $i++){
   			if($produtos[$i]->getAtivo()==0){
   				unset($produtos[$i]);
   			}
   		}
   		echo json_encode($produtos);
    }
    if($_GET['action'] == 'getCaracteristicasPorProduto') {
    	$prod= $_GET['id'];
   		$dao = new DAOCaracteristicas();
   		$caracteristicas = dao->getCaracteristicasPorProduto($categorias,$subcategorias );
    }
}

