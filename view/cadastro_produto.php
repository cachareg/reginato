<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keyword" content="">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/style.min.css" rel="stylesheet">
	<link href="css/style-responsive.min.css" rel="stylesheet">
	<link href="css/retina.css" rel="stylesheet">
	
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="ico/favicon.png">
	<!-- end: Favicon and Touch Icons -->	
	<script src="js/jquery-1.10.2.min.js"></script> 
	<script src='https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css'></script>
	<style>
	.loader {
	 clear: left; float: left; position: relative; left: 50%; 
	  border: 16px solid #f3f3f3;
	  border-radius: 50%;
	  border-bottom: 16px solid silver;
	  width: 50px;
	  height: 50px;
	  opacity: 0.5;

  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
	</style>
	
	<!-- end: JavaScript-->
		


</head>
	
	
	<body>
		
		
		<div id="conteudo" class="span10" height="900" >
			

			<div class="row-fluid"  >		

				<div class="box span12" scroll="no" style="width:100%" >
					<div class="box-header" data-original-title  style="width:100%">
						<h2><i class="icon-user"></i><span class="break"></span>Produtos</h2>
					</div>
					<div class="box-content" style="float:left; width:100%">
						
					<div class="loader"></div>

						<div id="tab" style="display:none">
						<table id="tabela" class="table table-striped table-bordered bootstrap-datatable datatable" style="float:left; width=90%;">
						  <thead>
							  <tr>
								  <th>Produto</th>
								  <th>Fábrica</th>
								  <th>Status</th>
								  <th>Ações</th>
							  </tr>
						  </thead>   
						  <tbody>
							
						  </tbody>

						</table>  
						<a  style="left:78%; bottom:20%" href="javascript:showhide()" style="float:left" class="quick-button-small span2">
								<i class=" icon-plus-sign"></i>
								<p>Novo</p>
						</a>
				</div><!--/spa
					</div>
					n-->
			</div><!--/row-->
			<!-- <a  href="javascript:showhide()" style="float:left" class="quick-button-small span2">
								<i class=" icon-plus-sign"></i>
								<p>Novo</p>
			</a> -->
		</div>
		</div>
		<div style="width:100% height:100%">
			<object width="100%" height="100%"  id="cadastros" type="text/html" style="overflow:hidden;" ></object>
		</div>
	</body>					

	<script>

		function showhide() {
			
       		$('.row-fluid').empty();
       		$('.row-fluid').append($("#cadastros"));
       		$('#cadastros').attr('data','inserir_produto.html');
       		$('#cadastros').css('height', window.innerHeight * 0.9);
       		
       		
     	}
     	function getfolder(e) {
    		var files = e.target.files;
    		var path = files[0].webkitRelativePath;
    		var Folder = path.split("/");
    		alert(Folder[3]);
		}

		$(' body').on('click', ".delete", function(event){
			//console.log($(this));
			$("#"+$(this).attr("objectId")).remove();
			$.ajax({
				url: "../controllers/cadastros.php",
		        data: {action:"removerProduto", id:$(this).attr("objectId")},
		        type: "POST",
		        success: function(data){
		        		alert("produto excluido");
			        },
			        error: function(data){
					 	console.log(data);
			        }

		    });
		});;
	</script>
			<script>
				$(document).ready(function (){
					$.ajax({
							url: "../controllers/cadastros.php",
					        context: document.body,
					        data: "action=getAllProdutos",
					        dataType:'json',
					        type: "GET",
					        success: function(data){
					        	$('#tabela').empty();
								for (var i = 0, len = data.length; i < len; i++) {
									if(data[i].ativo){
							        	$('#tabela').append('<tr id='+data[i].id_produto+'> <td>'+data[i].nome+'</td> <td>'+data[i].fabrica.nome+' </td> <td><span class="label label-success">Active</span></td><td> <a class="btn btn-info" href="#" onclick="openCar()"><i class="icon-edit "></i></a> <a  objectId='+data[i].id_produto+' class="btn btn-danger delete" ><i class="icon-trash "></i> </a></td></tr>');
							    	}
							    }
								    $("#tab").show();
									$(".loader").hide();
									 
										
						        },
						        error: function(data){
								 	console.log(data);
						        }

					    });
				});
			
			</script>


</html>