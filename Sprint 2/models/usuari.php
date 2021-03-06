<?php
class Usuari{
    
    public function validaUsuari($user, $pass){
        
        try{
            require_once "conexio.php";
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
var_dump($connexio);
            $db = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrasenya"]); 


            $consulta = $db->prepare('SELECT Rol_Usuario FROM usuario WHERE usuario = ? AND Password = ?');
        
            $consulta->execute(array($user, $pass));
            
            $role=false;
            while($fila=$consulta->fetch()){
                $role=$fila[0];
          }
            $db=null;
            return $role;
        } catch (Exception $e){
            echo("Error:".$e->getMessage());
            $db=null;
       }
}

	public function afigUsuari($usuario, $password, $Rol_Usuario){
	
	try{
	require_once "conexio.php";
	
	$cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
	$dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrasenya"]);
	$dbCon ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$consulta= $dbCon->prepare('INSERT INTO `usuario` ( `usuario`, `password`, `Rol_Usuario` ) VALUES ( ?, ?, ? );');

	echo('<br/>usuario:'.$usuario);
	echo('<br/>password:'.$password);
	echo('<br/>Rol_Usuario:'.$Rol_Usuario);
		
	$consulta->execute(array($usuario, $password, $Rol_Usuario));
	
	print_r($dbCon->errorInfo());
	
	echo("Files afectades: " . $consulta->rowCount());
	
	$dbCon=null;
	
	} catch (PDOException $e) {
		echo("Error:".$e->getMessage());
		$dbCon=null;
	}
}
    public function llistaUsuari(){
    try{
        require_once "conexio.php";
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            //var_dump($connexio);
            $db = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrasenya"]);
             
            $consulta = $db->prepare('SELECT usuario, Rol_Usuario FROM usuario'); 

             $consulta->execute();
             $usuarios=array();
            while($fila=$consulta->fetch()){
                $usuario["usuario"]=$fila[0];
                $usuario["password"]=$fila[1];
                $usuario["Rol_Usuario"]=$fila[2];

                array_push($usuarios, $usuario);
            }

        $db=null;

        return $usuarios;

       } catch (Exception $e){
            echo("Error:".$e->getMessage());
            $db=null;
       }
    
}
}
?>
