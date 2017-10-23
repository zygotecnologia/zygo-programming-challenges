<?php
session_start();

$filtro=array($_SESSION["filtro1"],$_SESSION["filtro2"],$_SESSION["filtro3"]);
$cont=0;
foreach($filtro as $value){
	if($value!=""){
		$divisor[$cont] = explode(" ", $value);
		$cont++;
	}
}
var_dump($divisor);
echo $divisor[0][0];
echo "<br>";
echo $divisor[0][1];

#sem multsort
for($i=0;$i<count($_SESSION["autor"]);$i++){
	$livros[$i]=array('Autor' =>$_SESSION["autor"][$i],'Titulo' =>$_SESSION["titulo"][$i],'Edicao' => $_SESSION["ano"][$i]);
}
#com multsort
$titulos= $_SESSION["titulo"];
$autores= $_SESSION["autor"];
$anos= $_SESSION["ano"];

$livros2=array('Titulo' =>$titulos,'Autor' =>$autores,'Edicao' =>$anos);

if($cont==1){

	if($divisor[0][1]=="Ascendente"){
		function cmp($a, $b) {
			global $divisor;
			return $a[$divisor[0][0]] > $b[$divisor[0][0]];
		}
		usort($livros, 'cmp');
	}else{
		function cmp($b, $a) {
			global $divisor;
			return $a[$divisor[0][0]] > $b[$divisor[0][0]];
		}
		usort($livros, 'cmp');
	}
	
}
if($cont==3){
	array_multisort($livros2[$divisor[0][0]],SORT_DESC,$livros2[$divisor[1][0]],SORT_DESC,$livros2[$divisor[2][0]],SORT_ASC);
	
	for($i=0;$i<count($_SESSION["autor"]);$i++){
		$livros[$i]=array('Autor' =>$livros2["Autor"][$i],'Titulo' =>$livros2["Titulo"][$i],'Edicao' => $livros2["Edicao"][$i]);
	}
}
var_dump($livros);



?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<table border="1px">
			<tr>
				<td>Titulo</td>
				<td>Autor</td>
				<td>Edicao</td>
			</tr>
			<?php
			for($i=0;$i<sizeof($livros);$i++){
			?>
				<tr>
					<td>
						<?php echo $livros[$i]['Titulo'];?>
					</td>
					<td>
						<?php echo $livros[$i]['Autor'];?>
					</td>
					<td>
						<?php echo $livros[$i]['Edicao'];?>
					</td>
				</tr>
			<?php
			}
			?>
		</table>
	</body>
</html>