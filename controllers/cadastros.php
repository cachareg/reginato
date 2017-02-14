<?php
header('Content-type:application/json');
include "../dao/DAOProduto.php";

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
    
}


if(isset($_POST['action'])) {
  if($_POST['action'] == 'inserirProduto') {
    $log=True;
    $cont=0;
    $vec[]=array(); 
    while($log){
      if(isset($_FILES[$cont])){
        array_unshift($vec,$_FILES[$cont]);
      }
      else{
        $log=False;
      }
      $cont++;
    }
    echo json_encode($vec);
  }
}
