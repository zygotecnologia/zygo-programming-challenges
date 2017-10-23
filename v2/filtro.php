<?php
session_start();

if($_SESSION["filtro1"]==""){
	$_SESSION["filtro1"]=$_POST["select"];
}elseif($_SESSION["filtro2"]==""){
	$_SESSION["filtro2"]=$_POST["select"];
}elseif($_SESSION["filtro3"]==""){
	$_SESSION["filtro3"]=$_POST["select"];
}
?>