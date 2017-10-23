<?php
session_start();
if(false){
	unset($_SESSION["filtro1"]);
	unset($_SESSION["filtro2"]);
	unset($_SESSION["filtro3"]);
	unset($_SESSION["titulo"]);
	unset($_SESSION["autor"]);
	unset($_SESSION["ano"]);
	unset($_SESSION["cont"]);
}
if(!isset($_SESSION["filtro3"])){
$_SESSION["filtro1"]="";
$_SESSION["filtro2"]="";
$_SESSION["filtro3"]="";
}
if(!isset($_SESSION["titulo"])){
$_SESSION["autor"]=array();
$_SESSION["titulo"]=array();
$_SESSION["ano"]=array();
}

	
?>
<html>
	<head>
	
		<title>Setor</title>
		
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript">
		
		
			$(document).ready(function() {
			
			
			
				$("#adicionar_livro").click(function() { 
					var opcao  = "Adicionar";
					ajax_adiciona(opcao);
				});
				$("#remover_ultimo").click(function() {
					var opcao  = "Remover";
					ajax_adiciona(opcao);
				});
				$("#limpar_livros").click(function() {
					var opcao  = "Limpar";
					ajax_adiciona(opcao);
				});
				
				
				$("#selecte").change(function() { 
					var opcao  = "Adicionar";
					ajax_filtro(opcao);
				});
				$("#limpar_filtro").click(function() {
					var opcao  = "Limpar";
					ajax_filtro(opcao);
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
			function ajax_filtro(opcao){
				var select    = $("#selecte").val();
				$.ajax({
					url: "filtro.php",
					type: "POST",
					data: {select: select,opcao: opcao},
					success:function(result){
						window.location.reload();
					}
					});
			}
			
		</script>

	</head>
	<body>

		<form action="ordena.php" method="POST">
		
			<div class="container">
				<input type="button" value="Adicionar Livro" name="adicionar_livro" id="adicionar_livro">
				<input type="button" value="Remover Ultimo" name="remover_ultimo" id="remover_ultimo">
				<input type="button" value="Limpar Livros" name="limpar_livros" id="limpar_livros">
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				<select  name="selecte" id="selecte">
					<option value="vazio">Sem filtro</option>
					<optgroup label="Título">
						<option value="Titulo Ascendente">Título Ascendente</option>
						<option value="Titulo Descendente">Título Descendente</option>
					</optgroup> 
					<optgroup label="Autor">
						<option value="Autor Ascendente">Autor Ascendente</option>
						<option value="Autor Desendente">Autor Desendente</option>
					</optgroup> 
					<optgroup label="Edição">
						<option value="Edicao Ascendente">Edição Ascendente</option>
						<option value="Edicao Descendente">Edição Descendente</option>
					</optgroup> 
					
				</select>
				
				
				<input type="submit" value="Ordenar" >
				
				<div>
				<table border="1px">
				<tr><td>Ordennar Por</td></tr>
				<?php
				$array=array("filtro1","filtro2","filtro3");
				foreach($array as $value){
					if($_SESSION[$value]!=""){
					?>
						<tr>
							<td>
							<?php
								echo $_SESSION[$value];
							?>
							</td>
						</tr>
					<?php
					}
				}
				?>
				</table>
				</div>
				
				<input type="button" value="Limpar Filtro" name="limpar_filtro" id="limpar_filtro">
				
			</div>
			
			<table border="1px">
				<tr>
					<td>Título</td>
					<td>Autor</td>
					<td>Edição</td>
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
			
					
		</form>
	</body>
</html>