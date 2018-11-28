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
td, th {
    border: 1px;
    text-align: center;
    padding: 8px;
}
.titulo {
    margin-left: 40px;
    }
</style>
</head>
<body>

<?php 
    require_once("menu.php");
?>
<br><br><br>
<div>
<h2 class="titulo"> Tabla de usuarios</h2>
<br><br>


</div>
<?php
require "conexio.php";
$cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
$db = new PDO($cadenaConnexio, $connexio["Usuario"], $connexio["password"]); 



$consulta = $db->prepare("SELECT * FROM Usuarios");

$consulta->execute
//$result=mysqli_query($, $consulta) or die (mysqli_error);
?>

<table class="tabla">
        <tr>
        <th>USUARIOS </th>
        <th>ROL </th>
        </tr>

<?php

while ($row=mysqli_fetch_array($consulta)) {
       echo '<tr><td>'.$row['usuario'].'</td>';
       echo '<td>'.$row['Rol_Usuario'].'</td>';
     
?><td> <form method='POST' action='EliminarUsuario.php'>
      <input type='hidden' name='usuario' value= <?php echo $row["usuario"] ?> >
      <input type='submit' class="btn btn-info btn-md" value='Eliminar'>
      </form></td></tr>
<!-- <a href="EliminarUsuario.php"><input type="button" value="Eliminar"  class="btn btn-info btn-md"></a> -->

<?php
}
mysqli_free_result($consulta);

$db=null;
?>

</body
</html>
