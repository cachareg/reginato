<?php
header('Content-type:application/json');

	if(isset($_GET['action']) && ($_GET['action'] == 'email_sender')) {
		$target = $_GET['email'];
		$table_content = $_GET['content'];

		$to = $target;
		$subject = "Pedido de Orçamento";

		$message = "<b>Pedido de Orçamento.</b><br/>";
		$message .= "Cliente: Joaoa augusto dos sasntos <br/>";
		$message .= $table_content;

		$header = "From:". $target ." \r\n";         
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html\r\n";

		$retval = mail ($to,$subject,$message,$header);
         
		echo json_encode($retval);
	}
?>
