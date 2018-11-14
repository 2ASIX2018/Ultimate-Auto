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
          <?php
          $userLabel= $user;
          echo $userLabel ;
          echo "";
          echo "";
          echo "";
          ?>
          </li>
          <br>
<?php
    if ($role=='user'){
?>
<br>
	    <li class="nav-item">
              <a class="nav-link js-scroll-trigger"></a>
            </li>
                     <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="coches.php">Coches</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="puj_coches.php">Administrar Coches</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Cerrar Sesion</a>
            </li>
         
<?php
    } else if ($role=='admin') {
?>
 
         
         
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="coches.php">Coches</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="puj_coches.php">Administrar Coches</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="altausuarios.php">Usuarios</a>
            </li>
	    <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Cerrar Sesion</a>
            </li>
<?php
} else {
?>
	    <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="entrar2.php">Entrar</a>
            </li>
	    <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="registrar.php">Registrat</a>
            </li>
<?php
}
?>
          </ul>
        </div>
      </div>
    </nav>

<body>
<html>
