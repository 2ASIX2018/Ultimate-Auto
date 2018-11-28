<?php

    try{
        require_once "conexio.php";
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            var_dump($connexio);
            $db = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrasenya"]); 

        $consulta = $db->prepare('DELETE FROM usuario WHERE usuario = '$usuario'');
        $consulta->execute();

//$conectar=mysqli_connect("localhost","root","root","concesionario") or die;
//$sql = "SELECT * FROM Usuarios";
//$result=mysqli_query($conectar, $sql) or die (mysqli_error);
//while ($row=mysqli_fetch_array($result)) {
//
//	echo $row;
//	}
if (isset($_POST["usuario"])){
//Se almacena en una variable el id del registro a eliminar
$id_cliente =$_POST["usuario"];
//Preparar la consulta
$sql = "DELETE FROM usuario WHERE usuario = '$id_cliente'";

//Ejecutar la consulta
$resultado = mysqli_query($conectar, $sql) or die (ola);

//redirigir nuevamente a la página para ver el resultado
header("location: altausuarios.php");
} else {
echo "FFUHO";
}



?>
