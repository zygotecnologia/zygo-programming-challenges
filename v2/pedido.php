<?php
session_start();

if($_SESSION['autor']==array()){
	$_SESSION['cont']=0;
}

if($_POST["opcao"]=="Adicionar"){
	$cont=$_SESSION['cont'];

	$_SESSION['autor'][$cont]=$_POST["autor"];
	$_SESSION['titulo'][$cont]=$_POST["titulo"];
	$_SESSION['ano'][$cont]=$_POST["ano"];

	$_SESSION['cont']++;
}
if($_POST["opcao"]=="Remover" and $_SESSION['cont']>0){	

	array_pop($_SESSION['autor']);
	array_pop($_SESSION['titulo']);
	array_pop($_SESSION['ano']);
	

	$_SESSION['cont']--;
}
?>