<?php
class Opinion{



public function afigOpinio($usuario, $password, $Rol_Usuario){
	
	try{
	require_once "conexio.php";
	
	$cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
	$dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrasenya"]);
	$dbCon ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$consulta= $dbCon->prepare('INSERT INTO `Opinion` ( `Comentario`, `Usuario` ) VALUES ( ?, ? );');

	echo('<br/>Comentario: '.$comentario);
	echo('<br/>Usuario: '.$usuario);
		
	$consulta->execute(array($comentario, $usuario));
	
	print_r($dbCon->errorInfo());
	
	echo("Files afectades: " . $consulta->rowCount());
	
	$dbCon=null;
	
	} catch (PDOException $e) {
		echo("Error:".$e->getMessage());
		$dbCon=null;
	}
}
}
?>
