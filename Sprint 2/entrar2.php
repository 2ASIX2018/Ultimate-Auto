<?php
    session_start();
?>
<html>
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

    <!-- CSS PAGINA -->
    <link href="css/css-pagina.css" rel="stylesheet">
    
</head>
<body>

<?php 
    require_once("menu.php");
?>
<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
                        <form class="form" action="comprobar.php" method="post" >
                            <div class="form-group">
                                <label for="usuario" class="text-white">Username:</label><br>
                                <input type="text" required="required" name="usuario" id="usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white">Password:</label><br>
                                <input type="password" name="password" required="required" id="password" class="form-control">
                            </div>
                            <div class="checkbox">
                              <label><input type="Checkbox" name="recordar" id="recordar" value="recordar"> Recorda'm en aquest ordinador
                              </label>          
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body
</html>
