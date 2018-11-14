<?php
session_start();
$usuario=$_SESSION['username'];
$role=$_SESSION['role'];
?>

<html>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="indexx.php">Inici</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="coches.php">Coches</a>
            </li>
<?php
    if ($role=='admin'){

?>
           <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="puj_coches.php">administrar coches</a>
            </li>
<?php
    }
?>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="entrar2.php">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="registrar.php">Registrat</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<body>
<html>
