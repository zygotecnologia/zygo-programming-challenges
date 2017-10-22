<?php
session_start();
if(false){
$_SESSION['autor']=array();
$_SESSION['titulo']=array();
$_SESSION['ano']=array();
}
?>
<html>
	<head>
		<link rel=”stylesheet” type=”text/css” href=style.css” />

		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script>
		$(document).ready(function() {
		
				$("#adicionar").click(function() { 
					var opcao  = $("#adicionar").val();
					ajax_adiciona(opcao);
				});
				$("#remover").click(function() {
					var opcao  = $("#remover").val();
					ajax_adiciona(opcao);
				});
			
				
			});
			
			function ajax_adiciona(opcao)
			{
				
				var autor  = $("#autor").val();
				var titulo = $("#titulo").val();
				var ano    = $("#ano").val();
			
				$.ajax({
					url: "pedido.php",
					type: "POST",
					data: {autor: autor, titulo: titulo, ano: ano, opcao: opcao},
					success:function(result){
						window.location.reload();
					}
					});
			}
			
		</script>
	</head>
	<body>

		<form action="ordena.php" method="POST">
			<table border="1px">
				<tr>
					<td>T&iacute;tulo</td>
					<td>Autor</td>
					<td>Edi&ccedil;&atilde;o</td>
				</tr>
				<tr>
					<td><input type="text" size="50" name="titulo" id="titulo"></td>
					<td><input type="text" name="autor" id="autor"></td>
					<td><input type="text" size="5" name="ano" id="ano"></td>
				</tr>
				<?php
				for($i=0;$i<count($_SESSION['autor']);$i++){
				?>
				<tr>
					<td><?=$_SESSION['titulo'][$i]?></td>
					<td><?=$_SESSION['autor'][$i]?></td>
					<td><?=$_SESSION['ano'][$i]?></td>
				</tr>
				<?php
				}
				?>
			</table>
			
				
			<input type="button" value="Adicionar" name="adicionar" id="adicionar">
			<input type="button" value="Remover" name="remover" id="remover">
			<input type="submit" >
			<input type="reset">
		</form>
	</body>
</html>