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
<h1 class="form-heading">Asi pots afegir un coches nou.</h1>

<div class="main-div">
    <br>
    <br>
    <form action="comprobar.php" method="GET" id="userManager" class="col-md-6 col-md-offset-4 col-sm-offset-4 col-sm-6">
       
        <div class="form-group">
            <label for="NewUserName" >Nom del coche.</label>
			<input type="text" required="required" class="form-control" name="nom" placeholder="nom">
        </div>


        <div class="form-group">
            <label for="NewUserPass1">Marca del coche. </label>
            <input type="password" required="required"ss1 name="contrasena" class="form-control"placeholder="marca">
        </div>

        <div class="form-group">
            <label for="NewUserPass2">Cilindra del coche.</label>
            <input type="password" required="required" class="form-control" id="NewUserPass2" placeholder="cilindra">
        </div>
        <div class="form-group">
                <form  method="post" action="action.cgi" enctype="multipart/form-data">
                   <input type="file" name="nombre" required="required">
                </form> 
        </div>
        <input type="submit" value="puja" >
        
        

        </form>    

</html>
