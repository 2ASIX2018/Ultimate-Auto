<?php
session_start();
require_once("models/coches_adm.php");

$nombrecoche=$_REQUEST["nom"];
$marca=$_REQUEST["marca"];
$ano=$_REQUEST["ano"];


$coche=new Coche();
$coche->afigCoche($nombrecoche, $marca, $ano);
header("Location: coches.php");

?>
