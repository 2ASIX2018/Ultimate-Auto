<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Coches Ultimate-Auto</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">
    
    

  </head>

  <body>

    <!-- Navigation -->
    <?php require_once("menu.php"); 
        ?>
    
    <!-- Page Content -->
    <div class="container">
    <br>
<br>
      <!-- Page Heading -->
      <h1 class="my-4">Pagina de coches<br></h1>
        
      
<br>
      <!-- Project One -->
      <div class="row">
        <div class="col-md-7">
          
        <?php
                require_once("models/coches_adm.php");
                $admcoches=new coche();
                $coches=$admcoches->listarcoches();

    


            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
          
        
        
          
           <a <input type="submit" name="submit" class="btn btn-info btn-md" value="submit"  href="opinions.php">Opinar</a>
           </div>
      <!-- /.row -->

      <hr>

     


     <!-- Pagination --><!--
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div> -->
    <!-- /.container -->

    <!-- Footer -->
    <?php require_once("footer.php");
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
