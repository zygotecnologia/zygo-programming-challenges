<?php
session_start();

if($_SESSION["filtro1"]==""){
?>
	<table border="1px">
			<tr>
				<td>Titulo</td>
				<td>Autor</td>
				<td>Edicao</td>
			</tr>
			<tr>
				<td>Vazio</td>
				<td>Vazio</td>
				<td>Vazio</td>
			</tr>
	</table>
	<p>Alerta: O filtro de ordenação ficou em branco</p>		
<?php
exit;
}

$livros=array();
$livros2=array();
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


$cont=0;
foreach($divisor as $value){
	if($value[1]=="Ascendente"){
		$direcionador[$cont] = SORT_ASC;
		$cont++;
	}else{
		$direcionador[$cont] = SORT_DESC;
		$cont++;
	}
}

var_dump($direcionador);


#sem multsort
for($i=0;$i<count($_SESSION["autor"]);$i++){
	$livros[$i]=array('Autor' =>$_SESSION["autor"][$i],'Titulo' =>$_SESSION["titulo"][$i],'Edicao' => $_SESSION["ano"][$i]);
}
#com multsort
$titulos= $_SESSION["titulo"];
$autores= $_SESSION["autor"];
$anos= $_SESSION["ano"];

$livros2=array('Titulo' =>$titulos,'Autor' =>$autores,'Edicao' =>$anos);

if($cont==2){
	
	function cmp2($a,$b){
		global $divisor;
		if($divisor[1][1]=="Ascendente"){
			return $a[$divisor[1][0]] > $b[$divisor[1][0]];
		}else{
			return $a[$divisor[1][0]] < $b[$divisor[1][0]];
		}
	}
	
	function cmp($a, $b) {
		global $divisor;
		if($a[$divisor[0][0]]==$b[$divisor[0][0]]){
			return cmp2($a, $b);
		}
		if($divisor[0][1]=="Ascendente"){
			return $a[$divisor[0][0]] > $b[$divisor[0][0]];	
		}else{
			return $a[$divisor[0][0]] < $b[$divisor[0][0]];	
		}
	}
	
	usort($livros, 'cmp');
	
		
}
	



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
	
	array_multisort($livros2[$divisor[0][0]],$direcionador[0],$livros2[$divisor[1][0]],$direcionador[1],$livros2[$divisor[2][0]],$direcionador[2]);
	
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