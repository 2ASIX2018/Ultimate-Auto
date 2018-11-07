<?php 
session_start();

$_SESSION["username"]=$_POST["username"];
$_SESSION["password"]=$_POST["password"];

$username=$_POST["username"];
$password=$_POST["password"];

if ( $username == "pepe" && $password == "1234" ){

        echo "conectado";
            header('location:coches.php'); }
else {
        sessio_destroy();
            header('location:entrar.php');
}

?>
