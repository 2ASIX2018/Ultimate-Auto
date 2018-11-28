<?php
session_start();
//require_once("models/coches_adm.php");
$nombrecoche=$_POST["nom"];
$marca=$_POST["marca"];
$ano=$_POST["ano"];
$imagen=$_POST["imagen"];

echo $nombrecoche;

//$coche=new Coche();
//$coche->AfigCoche($nombrecoche, $marca, $ano, $imagen);
//header("Location: indexx.php");
?>
