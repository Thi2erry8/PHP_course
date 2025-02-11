<?php
    $title = 'funtions';
    
    function sum($a,$b){
         return $a+$b;
    }
    
    $result = sum(1,2);
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PHP Fundamentals: <?= $title; ?></title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/php-fundamentals.css" rel="stylesheet" />
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">PHP Fundamentals: <?= $title; ?></a>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">My Favorite Guitars</h1>
        </div>
      </div>
      
      <div class="row">
           <table class="table table-striped">
                  <?= $result;?>
                  <?php
                    /* $i = 0;
                    while($i < count($favoriteGuitars)){
                        $guitars = $favoriteGuitars[$i];
                        echo"<tr><td>$guitars</td></tr>";
                        
                        $i++;
                    }; */
                        /* for ($i=0; $i < count($favoriteGuitars); $i++) { 
                          $guitars = $favoriteGuitars[$i];
                            echo"<tr><td>$guitars</td></tr>";
                        } */
                   ?>
            </table>  
      </div>

    </div>
  </body>

</html>