<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$user="Anonim";
$role="";

if (isset($_SESSION['usuario'])) {
    $user=$_SESSION['usuario'];
    if (isset($_SESSION['role']) && $_SESSION['role']=="admin") $role="(Administrador)";
    else $role="";
} else if (isset($COOKIE['UltimateAutoUser'])) {
        $_SESSION['usuario'] = $_COOKIE['UltimateAutoUser'];
        if (isset($_COOKIE['UltimateAutoRole'])) $_SESSION['role'] = $_COOKIE['UltimateAutoRole'];
        if ($_SESSION['role']=="admin") $role="(Administrador)"; else $role="";
        $user=$_SESSION['usuario'];
}
$userLabel= $user.$role;
?>

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

  </head>

  <body id="page-top">

    <?php 
        require_once("menu.php");
    ?>

    <!-- Navigation -->
    <header class="bg-primary text-white">
      <div class="container text-center">
      <br/>
        <h1>Ultimate-Auto</h1>
        <br/>
        <p class="lead">Si te gustan los coches a qui encontraras todo tipo de informacio.</p>
        <br/><p> </p>
        <br/><br/>
        <br/><br/><br/>
      </div>
    </header>


    <!--
          <div class="col-lg-8 mx-auto">
            <h2></h2>
            <p class="lead"></p>
          </div>
        


          <div class="col-lg-8 mx-auto">
            <h2></h2>
            <p class="lead"></p>
          </div>
    -->

    <?php
        require_once("footer.php");
    ?>

    

  </body>

</html>
