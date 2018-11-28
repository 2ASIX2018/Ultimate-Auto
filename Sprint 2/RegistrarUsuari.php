<?php
session_start();
require_once("models/usuari.php");

$usuario=$_POST["usuario"];
$password=$_POST["password"];
$Rol_Usuario=user; 
$usuari=new Usuari();
$usuari->afigUsuari($usuario, $password, $Rol_Usuario);
header("Location: indexx.php");  
?>
