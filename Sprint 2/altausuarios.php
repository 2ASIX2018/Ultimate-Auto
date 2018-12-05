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
 <?php
   
    require_once("models/usuari.php");
    
    ?>
<div>
<h2 class="titulo"> Tabla de usuarios</h2>
</div>
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Usuari</th>
        <th>Rol</th>
        <th> </th>
        <th>Gestionar</th>
      </tr>
    </thead>

    <tbody>
<?php 
$GestorUsuarios=new Usuari();
$Usuarios=$GestorUsuarios->llistaUsuari();
 for ($i=0; $i<count($Usuarios); $i++) {
    if ($i%2==0) {
        $clase="table-light";
    } else {
        $clase="table-info"; 
}
 ?>

<tr class=<?php echo ($clase); ?>>
        <td> <?php echo($Usuarios[$i]["usuario"]) ?></td>
        <td> <?php echo($Usuarios[$i]["password"]) ?></td>
        <td> <?php echo($Usuarios[$i]["Rol_Usuario"]) ?></td>
        <td>        
        <form aclass="form" action="EliminarUsuario.php" method="post">
        <input type="button" value="Eliminar">
        </form> </td>
</tr>

<?php 
}
?>
  </tbody>
  </table>
</body>
</html>
