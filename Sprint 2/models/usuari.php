<?php
class Usuari{
    
    public function validaUsuari($usuari, $pass){
        
        try{
            require_once "conexio.php";
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
var_dump($connexio);
            $db = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrasenya"]); 
            $consulta = $db->prepare('SELECT Rol_Usuario FROM usuario WHERE usuario = ? AND Password = ?');
        
            $consulta->execute(array($usuari, $pass));
            
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
}
?>
