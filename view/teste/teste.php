<html>

<body>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script>
		$(document).ready(function (){
		var cat= [1,2];
		var sub= [1,2];
		$.ajax({
				
				url: "../../controllers/cadastros.php",
		        context: document.body,
		        data: {"action":"getAllProdutosAtivosPorCategoriasSubcategorias", "categorias":JSON.stringify(cat), "subcategorias":JSON.stringify(sub)},
		        dataType:'json',
		        type: "GET",
		        success: function(data){
		        	console.log(data);
		        },
		        error: function(data){
				 	console.log(data);
		        }

		    });

			
		});
	</script>
</body>



</html>