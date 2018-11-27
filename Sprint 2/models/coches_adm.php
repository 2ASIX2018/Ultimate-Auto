<?php
class Noticia{
    
    public function afigCoche($nom, $marca, $modelo, $imgs){
        
        try{
            require_once "connexio.php";
            
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
            
            $consulta = $dbCon->prepare('INSERT INTO `coches`
            (`NombreCoche`,
            `Marca`,
            `Modelo_idModelo`,
            `imagen`,
                VALUES (?, ?, ?, ?);');
            
            echo("<br/>NombreCoche:".$nom);
            echo("<br/>Marca:".$marca);
            echo("<br/>Modelo_idModelo".$modelo);
            echo("<br/>imagen".$imgs);
            $consulta->execute(array($nom, $marca, $modelo, $imgs));
            print_r($dbCon->errorInfo());
            echo("Files afectades: ".$consulta->rowCount());
                        
            $dbCon=null;
            
        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }
    }
    public function NumNoticies(){
    try{
        // Retorna el número de notícies en total
        // Fem la connexió
        require_once "connexio.php";
        $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
        $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
        $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
        
        // Preparem la consulta
        $consulta = $dbCon->prepare('SELECT count(*) FROM Article');
        
        // Executem la consulta
        $consulta->execute();
        $noticies=array();
        // Agafem el resultat
        $fila=$consulta->fetch();
        // Tanquem la connexió
        $dbCon=null;
        // tornem el resultat
        return $fila[0];
    } catch (PDOException $e){
        echo("Error:".$e->getMessage());
        $dbCon=null;
    }
        
    }
    public function llistaNoticies(){
        try{
            require_once "connexio.php";
            
            // Fem la connexió
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            
            // Preparem la consulta
            $consulta = $dbCon->prepare('SELECT idArticle, Titol, Ressum, Publicat FROM Article ORDER BY Publicat DESC');
            
            // Executem la consulta
            $consulta->execute();
            $noticies=array();
            // Agafem els resultats amb un bucle i els afegim a l'array de noticies
            while($fila=$consulta->fetch()){
                $noticia["id"]=$fila[0];
                $noticia["titol"]=$fila[1];
                $noticia["ressum"]=$fila[2];
                array_push($noticies, $noticia);
            }
            
            // Tanquem la connexió
            $dbCon=null;
            // tornem els resultats
            return $noticies;
            
        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }
    }
    public function llistaRangNoticies($ini, $fin){
        try{
            require "connexio.php";
            
            // Fem la connexió
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            
            // Preparem la consulta
            $consulta = $dbCon->prepare("SELECT idArticle, Titol, Ressum, Publicat FROM Article ORDER BY Publicat DESC LIMIT :offset, :limit");
            
            // Executem la consulta
            //$consulta->execute(array(1.0, 3.0));
            //$consulta->execute();
            $consulta->bindValue(':offset', intval($ini),PDO::PARAM_INT);
            $consulta->bindValue(':limit',  intval($fin),PDO::PARAM_INT);
            $consulta->execute();
            $noticies=array();
            // Agafem els resultats amb un bucle i els afegim a l'array de noticies
            while($fila=$consulta->fetch()){
                $noticia["id"]=$fila[0];
                $noticia["titol"]=$fila[1];
                $noticia["ressum"]=$fila[2];
                array_push($noticies, $noticia);
            }
            
            // Tanquem la connexió
            $dbCon=null;
            // tornem els resultats
            return $noticies;
            
        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }
    }
    public function lligNoticia($id){
        try{
            require_once "connexio.php";
            
            // Fem la connexió
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
            
            // Preparem la consulta
            $consulta = $dbCon->prepare('SELECT A.Titol, A.Ressum, A.Contingut, A.Publicat, A.Usuari_login, C.Descripcio
                                         FROM Article A, Categoria C WHERE A.idArticle=? AND C.idCategoria=A.Categoria_idCategoria');
            
            // Executem la consulta
            $consulta->execute(array($id));
            // Agafem els resultats amb un bucle
            while($fila=$consulta->fetch()){
                $article=array(
                    "titol"=>$fila[0],
                    "ressum"=>$fila[1],
                    "contingut"=>$fila[2],
                    "publicat"=>$fila[3],
                    "autor"=>$fila[4],
                    "categoria"=>$fila[5]);
            }
            
            // Tanquem la connexió
            $dbCon=null;
            // tornem els resultats
            return $article;
            
        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }
    }
}
?>
