<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ultimate-Auto</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

<style type="text/css">
.box {
    width: 500px;
    margin: 200px 0;
}

.float {
    position: absolute;
    z-index: 2;
}
.form {
    margin-left: 145px;
}
.body {
    margin-left: auto;
    margin-right: auto;
    margin:0px 0px 0px 0px;
}
table {
    text-align: center;
    width: 75%;
    font-family: arial, sans-serif;
}
td, tr {
    border: 1px;
    text-align: center;
    padding: 8px;
}
.titulo {
    margin-left: 40px;
      height: 60px;
    }
</style>
</head>

<body>
<?php 
        require_once("menu.php");
    ?>
<br>
<br>
<br>
<div>
<h2 class="titulo"> Tabla de usuarios</h2>
</div>
<?php 
        try{
        require_once "models/conexio.php";
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            //var_dump($connexio);
            $db = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrasenya"]);
             
            $consulta = $db->prepare('SELECT usuario, Rol_Usuario FROM usuario'); 

             $consulta->execute();

            while($fila=$consulta->fetch()){
               ?>
                <table>
                    <tr>
                         <td> <?php echo "Usuario: {$fila["usuario"]}<br>"; ?></td>
                         <td> <?php echo "Rol: {$fila["Rol_Usuario"]}<br>"; ?></td>
                         <td>  <form action="EliminarUsuario.php" method="post"> <input type="Reset" value="Borrar">
                    </tr>
                </table>
        <?php
        $db=null;
        }
       }
        catch (Exception $e){
            echo("Error:".$e->getMessage());
            $db=null;
       }
    ?>
</body>
</html>
