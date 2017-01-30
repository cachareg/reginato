<?php
header('Content-type:application/json');
include "../dao/DAOProduct.php";

if(isset($_GET['action'])) {
    if($_GET['action'] == 'getAllProduct') {
    	header('Content-type:application/json');
	    $dao = new DAOProduct();
	    $produtos = $dao->getAllProduct();
		echo json_encode($produtos);
    }
}


?> 