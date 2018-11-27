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

.shape1{
    position: relative;
    height: 150px;
    width: 150px;
    background-color: #0074d9;
    border-radius: 80px;
    float: left;
    margin-right: -50px;
}
.shape2 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: #0074d9;
    border-radius: 80px;
    margin-top: -30px;
    float: left;
}
.shape3 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: #0074d9;
    border-radius: 80px;
    margin-top: -30px;
    float: left;
    margin-left: -31px;
}
.shape4 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: #0074d9;
    border-radius: 80px;
    margin-top: -25px;
    float: left;
    margin-left: -32px;
}
.shape5 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: #0074d9;
    border-radius: 80px;
    float: left;
    margin-right: -48px;
    margin-left: -32px;
    margin-top: -30px;
}
.shape6 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: #0074d9;
    border-radius: 80px;
    float: left;
    margin-right: -20px;
    margin-top: -35px;
}
.shape7 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: #0074d9;
    border-radius: 80px;
    float: left;
    margin-right: -20px;
    margin-top: -57px;
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
$conectar=mysqli_connect("localhost","root","qwerty1","concesionario") or die;
$sql = "SELECT * FROM Usuarios";
$result=mysqli_query($conectar, $sql) or die (mysqli_error);
?>

<table class="tabla">
        <tr>
        <th>USUARIOS </th>
        <th>ROL </th>
        </tr>

<?php

while ($row=mysqli_fetch_array($result)) {
       echo '<tr><td>'.$row['NombreUusario'].'</td>';
       echo '<td>'.$row['Rol_usuario'].'</td>';
     
?><td> <form method='POST' action='EliminarUsuario.php'>
      <input type='hidden' name='NombreUusario' value= <?php echo $row["NombreUusario"] ?> >
      <input type='submit' class="btn btn-info btn-md" value='Eliminar'>
      </form></td></tr>
<!-- <a href="EliminarUsuario.php"><input type="button" value="Eliminar"  class="btn btn-info btn-md"></a> -->

<?php
}
mysqli_free_result($result);
?>

</body
</html>
