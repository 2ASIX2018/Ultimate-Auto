<html>
<head>
<?php
session_start();
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ultimate-Auto</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

  </head>
<body>
<?php require_once("menu.php");  ?>

<div class="container">
<h1 class="form-heading">Asi pots registrar-te.</h1>

<div class="main-div">
    <br>
    <br>
    <form action="RegistrarUsuari.php" method="POST" id="userManager" class="col-md-6 col-md-offset-4 col-sm-offset-4 col-sm-6">
       
        <div class="form-group">
            <label for="usuario" >Usuari</label>
			<input type="text" required="required" class="form-control" name="usuario" placeholder="Usuari">
        </div>


        <div class="form-group">
            <label for="NewUserPass1">Contrasenya</label>
            <input type="password" required="required"ss1 name="password" class="form-control"placeholder="contrassenya">
        </div>

        <div class="form-group">
            <label for="NewUserPass2">Repetiu la contrasenya</label>
            <input type="password" required="required" class="form-control" id="NewUserPass2" placeholder="Repetiu la Contrassenya">
        </div>
        <input type="submit" value="Envia" >
        </form>    
</html>
