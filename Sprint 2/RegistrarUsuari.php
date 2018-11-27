<?php
session_start();

require_once "models/conexio.php";

$username=$_POST["usuario"];
$password=$_POST["contrasena"];
$Rol_usuari=user;
    //Conexion con la base
 
$connexio= mysqli_connect("localhost","root","qwerty1","concesionario") or die ("ola");
//Ejecucion de la sentencia SQL
$query= "insert into Usuarios (NombreUusario, Password, Rol_usuario) values('$username','$password','$Rol_usuari')";
$result=mysqli_query($connexio, $query);
header("location: indexx.php");

?>
