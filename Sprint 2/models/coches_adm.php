<?php
class Coche{

	public function afigCoche($nombrecoche, $marca, $ano){
	
	try{
	require_once "conexio.php";
	
	$cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
	$dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrasenya"]);
	$dbCon ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$consulta= $dbCon->prepare('INSERT INTO `Coches` ( `nombrecoche`, `marca`, `ano` ) VALUES ( ?, ?, ? );');

	echo('<br/>nombrecoche:'.$nombrecoche);
	echo('<br/>marca:'.$marca);
	echo('<br/>ano:'.$ano);
		
	$consulta->execute(array($nombrecoche, $marca, $ano));
	
	print_r($dbCon->errorInfo());
	
	echo("Files afectades: " . $consulta->rowCount());
	
	$dbCon=null;
	
	} catch (PDOException $e) {
		echo("Error:".$e->getMessage());
		$dbCon=null;
	}
}

	public function llistaCoches(){
	
	try{
	require_once "conexio.php";
	
	$cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
	$dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrasenya"]);
	$dbCon ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$consulta= $dbCon->prepare('SELECT nombrecoche, marca, ano FROM Coches');
		
	$consulta->execute();
	$coches=array();
	
	while($fila=$consulta->fetch()) {
		$coche["Nombrecoche"]=$fia[0];
		$coche["marca"]=$fia[1];
		$coche["ano"]=$fia[2];
		
		array_push($coches, $coche);
	}
		
	
	$dbCon=null;
	
	return $coches;
	
	} catch (PDOException $e) {
		echo("Error:".$e->getMessage());
		$dbCon=null;
}
}
}

        public function listarcoches(){
        try{
            require_once "connexio.php";

            // Fem la connexió
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrasenya"]);
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Preparem la consulta
            $consulta = $dbCon->prepare('SELECT nombrecoche, marca, ano FROM Coches ');

            // Executem la consulta
            $consulta->execute();
            $coches=array();
            // Agafem els resultats amb un bucle i els afegim a l'array de noticies
            while($fila=$consulta->fetch()){
                $coche["nombrecoche"]=$fila[0];
                $coche["marca"]=$fila[1];
                $coche["ano"]=$fila[2];
                array_push($coches, $coche);
            }

            // Tanquem la connexió
            $dbCon=null;
            // tornem els resultats
            return $coches;

        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }
    }

}
?>
