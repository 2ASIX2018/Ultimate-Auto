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
<?php 

require_once("menu.php"); 

$user=$_SESSION['usuario'];
echo $user;
 ?>
<br>
<br><p></p>
<div class="container">
<h1 class="form-heading">Asi pots donar la teua opinio.</h1>

<div class="main-div">
    <br>
    <br>
    <form action="comprobar.php" method="POST" id="userManager" class="col-md-6 col-md-offset-4 col-sm-offset-4 col-sm-6">
       
        <div class="form-group">
            <h2 strong><?php echo $user; ?></h2>
			
        </div>


        <div class="form-group">
            <label for="NewUserPass1">Nom coche a opinar. </label>
            <input type="password" required="required"ss1 name="contrasena" class="form-control"placeholder="marca">
        </div>

        
        <div class="form-group">
               <textarea name="comentarios" rows="10" cols="40">Escribe aquí tus comentarios</textarea> 
        </div>
        <input type="submit" value="puja" >

 
        
        

        </form>    

</html>
