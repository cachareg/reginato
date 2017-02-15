<?php
header('Content-type:application/json');
include "../dao/DAOProduto.php";
include "../dao/DAOCaracteristica.php";

if(isset($_GET['action'])) {
    if($_GET['action'] == 'getAllProdutos') {
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
    if($_GET['action'] == 'getAllCaracteristicas') {
      $dao = new DAOCaracteristica();
      $car = $dao->getAllCaracteristicas();
      echo json_encode($car);
    }
    
}

if(isset($_POST['action'])) {
  if($_POST['action'] == 'inserirProduto') {
    $log=True;
    $rett = "";
    $cont=0;
    $vec[]=array();
    $target_dir = "produtos/"; 
    while($log){
      if(isset($_FILES[$cont])){
        $target_file = $target_dir . basename($_FILES[$cont]["name"]);
        //echo var_dump($_FILES[$cont]["tmp_name"]);
        if (move_uploaded_file($_FILES[$cont]["tmp_name"], $target_file)) {
            $rett = $rett.$target_file;
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        }else{
          //$rett = $rett."nao consegui";
        }
        //array_unshift($vec,$_FILES[$cont]);
      }else{
        //$rett = $rett."nao consegui 2";
        $log=False;
      }
      $cont++;
    }
    echo json_encode($rett);
  }
  
}
