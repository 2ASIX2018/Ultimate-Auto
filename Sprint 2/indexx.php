<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$user="Anonim";
$role="";

if (isset($_SESSION['username'])) {
    $user=$_SESSION['username'];
    if (isset($_SESSION['role']) && $_SESSION['role']=="admin") $role="(Administrador)";
    else $role="";
} else if (isset($COOKIE['UltimateAutoUser'])) {
        $_SESSION['username'] = $_COOKIE['UltimateAutoUser'];
        if (isset($_COOKIE['UltimateAutoRole'])) $_SESSION['role'] = $_COOKIE['UltimateAutoRole'];
        if ($_SESSION['role']=="admin") $role="(Administrador)"; else $role="";
        $user=$_SESSION['username'];
}
$userLabel= $user.$role;
?>

  <head>

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

  <body id="page-top">

    <?php 
        require_once("menu.php");
    ?>

    <!-- Navigation -->
    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Ultimate-Auto</h1>
        <p class="lead">Si te gustan los coches a qui encontraras todo tipo de informacio.</p>
      </div>
    </header>

          <div class="col-lg-8 mx-auto">
            <h2>Per a vore esta informacio tindras que </h2>
            <h3>Informacio sobre coches.</h3>
            <p class="lead"></p>
            <ul>
                <li>Marcas.</li>
                <li>Modelos.</li>
                <li>Cilindra.</li>
            </ul>
          </div>

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