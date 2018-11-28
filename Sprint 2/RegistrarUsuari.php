<?php
session_start();

$user=$_POST["usuario"];
$password=$_POST["password"];
$Rol_usuari=user;
    

    try {
    require_once "conexio.php";
           $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
    var_dump($connexio);
           $db = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrasenya"]); 
            
            
            $consulta = $db->prepare('INSERT INTO `usuario` (`usuario`, `password`, `Rol_Usuario`) VALUES(?,?,?)';
            
            
       
         if ($consulta->execute()){
    header("location: indexx.php");
}

        }
            
            catch (Exception $e){
            echo("Error:".$e->getMessage());
            $db=null;
       }



?>
