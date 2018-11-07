<!DOCTYPE html>
<html lang="en">
<?php
session_start();
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
        <p class="lead">Si te gustan los coches a qui encontraras todo tipo de informacion.</p>
      </div>
    </header>

          <div class="col-lg-8 mx-auto">
            <h2>Informacion sobre coches.</h2>
            <p class="lead"></p>
            <ul>
              <li>Marcas.</li>
                <li>Modelos.</li>
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
