<?php
header('Content-type:application/json');
include "../dao/DAOProduto.php";

header('Content-type:application/json');
$dao = new DAOProduto();
$produtos = $dao->getAllProdutos();
echo json_encode($produtos);

if(isset($_GET['action'])) {
    if($_GET['action'] == 'getAllProdutos') {
    	header('Content-type:application/json');
	    $dao = new DAOProduto();
	    $produtos = $dao->getAllProdutos();
		echo json_encode($produtos);
    }
}


?> 