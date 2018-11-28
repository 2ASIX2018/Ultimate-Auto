<?php
session_start();
require_once("models/coches_adm.php");
//$target_dir = "imagenes/coches/";
//$target_file = $target_dir .basename($_FILES["imagen"]["name"]);
echo "hecho";
$nombrecoche=$_REQUEST["nom"];
$marca=$_REQUEST["marca"];
$ano=$_REQUEST["ano"];
//$imagen=basename($_FILES["imagen"]["name"]);
echo $nombrecoche;
echo $marca;
//$tmp_file=$_FILES["imagen"]["tmp_name"];

//if (move_uploaded_file($tmp_file, $target_file)) {
    //echo "La imagen " .basename($target_file). " se a subido.";
//} else {
//   echo "Se a producido algun error subiendo la imagen.";
//};

$coche=new Coche();
$coche->afigCoche($nombrecoche, $marca, $ano, $imagen);
//header("Location: indexx.php");

echo "hecho";
?>
