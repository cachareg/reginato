<?php
header('Content-type:application/json');
include "../dao/DAOProduto.php";
include "../dao/DAOCaracteristica.php";
require_once("../dao/DAOFabrica.php");
include "../dao/DAOCategoria.php";
$out[]=array(); 
   
      $id_caracteristica= 1;
      $dao = new DAOCaracteristica();
      $caracteristica=$dao->buildCaracteristica($id_caracteristica);
      $valores[]=array();
      if($caracteristica->isValoresSelecionadosPorFoto()){
          $caminhos = $dao->getFotos($id_caracteristica);
          var_dump($caminhos);
      }

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
    if($_GET['action'] == 'getAllCaracteristicasCategoriasFabricas') {
      $out[]=array(); 

      $dao = new DAOCaracteristica();
      $car = $dao->getAllCaracteristicas();
      $out["caracteristicas"]= $car;
      $dao = new DAOCategoria();
      $cat = $dao->getAllCategorias();
      $out["categorias"]= $cat;
      $dao = new DAOFabrica();
      $fab = $dao->getAllFabricas();
      $out["fabricas"]= $fab;

      echo json_encode(DAOCaracteristica::utf8_code_deep($out));
    }

    if($_GET['action'] == 'getValoresCaracteristica') {
      $id_caracteristica= json_decode($_GET['id']);
      $dao = new DAOCaracteristica();
      $caracteristica=$dao->buildCaracteristica($id_caracteristica);
      $valores[]=array();
      if($caracteristica->isValoresSelecionadosPorFoto()){
          $caminhos = $dao->getFotos();
          var_dump($caminhos);
      }
      
    }
    
}

if(isset($_POST['action'])) {
  if($_POST['action'] == 'inserirProduto') {
    $log=True;
    $rett = "";
    $cont=0;
    $vec[]=array();
    $target_dir = "../fotos/produtos/"; 
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
