<?php
header('Content-type:application/json');
include "../dao/DAOProduto.php";
include "../dao/DAOCaracteristica.php";
require_once("../dao/DAOFabrica.php");
include "../dao/DAOCategoria.php";
require_once("../dao/DAOFoto.php");
require_once("../model/Valor.php");
require_once("../model/FotoCaracteristica.php");

if(isset($_GET['action'])) {

    if($_GET['action'] == 'getAllCategories'){
      $dao = new DAOCategoria();
      $categorias = $dao->getAllCategorias();
      echo json_encode(DAOCaracteristica::utf8_code_deep($categorias));    
    }

    if($_GET['action'] == 'getAllProdutos') {
	    $dao = new DAOProduto();
	    $produtos = $dao->getAllProdutos(null, null);
		  echo json_encode($produtos);
    }
    if($_GET['action'] == 'getCaracteristicasProduto') {
      $id_produto= intval(json_decode($_GET['id']));
      $dao = new DAOProduto();
      $produto = $dao->getCaracteristicasProduto($id_produto);
      echo json_encode(DAOCaracteristica::utf8_code_deep($produto));
    }

    if($_GET['action'] == 'getAllProdutosAtivos') {    	
   		$dao = new DAOProduto();
   		$produtos = $dao->getAllProdutos();
   		
   		// for($i=0;$i<sizeof($produtos); $i++){
   		// 	if($produtos[$i]->getAtivo()==0){
   		// 		unset($produtos[$i]);
   		// 	}
   		// }
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
      $id_caracteristica= intval(json_decode($_GET['id']));
      $dao = new DAOCaracteristica();
      $caracteristica=$dao->buildCaracteristica($id_caracteristica);
      $valores[]=array();
      $fotos;
      if($caracteristica->isValoresSelecionadosPorFoto()){
        $fotos = $dao->getFotos($id_caracteristica);
      }
      echo json_encode(DAOCaracteristica::utf8_code_deep($fotos));
    }
    
}

if(isset($_POST['action'])) {
  if($_POST['action'] == 'inserirFabrica') {
    $fabrica = new Fabrica();
    $fabrica->setNome($_POST['nome']);
    $daoF = new DaoFabrica();
    $daoF->inserirFabrica($fabrica);
  }

  if($_POST['action'] == 'inserirCategoria') {
    $categoria = new Categoria();
    $categoria->setNome($_POST['nome']);
    $subcategorias = json_decode(($_POST['subcategorias']));

    $daoC = new DaoCategoria();
    $daoC->inserirCategoria($categoria);
    $categoria->setId($daoC->inserirCategoria($categoria));
    $daoC->inserirSubcategoria($subcategorias, $categoria->getId());
    
  }

  if($_POST['action'] == 'inserirProduto') {
    $log=true;
    $rett = "";
    $cont=0;
    $vec[]=array();
    
    $produto = new produto();
    $produto->setNome($_POST['nome']);
    $daoF = new DAOFabrica();
    $daoP = new DAOProduto();
    $produto->setFabrica($daoF->buildFabrica($_POST['fabrica']));
    $daoCat = new DAOCategoria();
    $daoCar = new DAOCaracteristica();
    $daoFoto = new DAOFoto();
    $produto->setLancamento($_POST['lancamento']);
    $produto->setAtivo($_POST['ativo']);
    $categorias = json_decode(($_POST['categorias']));
    
    for($i=0;$i<sizeof($categorias); $i++){
      $produto->addCategoria($daoCat->buildCategoria($categorias[$i]));
    }  
    $subcategorias = json_decode(($_POST['subcategorias']));
    
    for($i=0;$i<sizeof($subcategorias); $i++){
      $produto->addCategoria($daoCat->buildSubcategoria($subcategorias[$i]));
    }  
    $caracteristicas = json_decode(($_POST['caracteristicas']));
    for($i=0;$i<sizeof($caracteristicas); $i++){
      $produto->addCaracteristica($daoCar->buildCaracteristica($caracteristicas[$i]));
      if(!$daoCar->buildCaracteristica($caracteristicas[$i])->isValoresSelecionadosPorFoto()){        
        $valores= json_decode($_POST["valores"]);
        $valoresCurrent= $valores[$daoCar->buildCaracteristica($caracteristicas[$i])->getId()];
        foreach ($valoresCurrent as $current) {
          $valor = new Valor();
          $valor->setNome($current);
          $valor->setCaracteristica($daoCar->buildCaracteristica($caracteristicas[$i]));
          $produto->addValor($valor);
        }

      }else{
          $fotosCaracteristica= json_decode($_POST["valoresComFoto"]);
          $fotosCurrent= $fotosCaracteristica[$daoCar->buildCaracteristica($caracteristicas[$i])->getId()];
          foreach ($fotosCurrent as $current) {
            $fotoC = new FotoCaracteristica();
            $fotoC->setId($current);
            $fotoC->setCaracteristica($daoCar->buildCaracteristica($caracteristicas[$i]));
            $produto->addFotoCaracteristica($fotoC);
          }
      }
    }
    $produto->setId($id = $daoP->inserirProduto($produto));
    mkdir("../fotos/produtos/".$id."/");
    $target_dir = "../fotos/produtos/".$id."/";
    while($log){
      if(isset($_FILES[$cont])){
        $target_file = $target_dir . basename($_FILES[$cont]["name"]);
        $foto = new Foto();
        $foto->setCaminho(basename($_FILES[$cont]["name"]));
        $produto->addFoto($foto);

        if (move_uploaded_file($_FILES[$cont]["tmp_name"], $target_file)) {
            $rett = $rett.$target_file;
        }else{
        }
        $cont++;
      }else{
        $log=False;
      }
    }
    $daoP->inserirFotosProduto($produto);
    
}   
}
