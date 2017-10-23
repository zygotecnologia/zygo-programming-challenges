<?php
session_start();

if($_POST["opcao"]=="Adicionar"){
	if($_SESSION["filtro1"]==""){
		$_SESSION["filtro1"]=$_POST["select"];
	}elseif($_SESSION["filtro2"]==""){
		$_SESSION["filtro2"]=$_POST["select"];
	}elseif($_SESSION["filtro3"]==""){
		$_SESSION["filtro3"]=$_POST["select"];
	}
}
if($_POST["opcao"]=="Limpar"){

	unset($_SESSION["filtro1"]);
	unset($_SESSION["filtro2"]);
	unset($_SESSION["filtro3"]);
}
?>