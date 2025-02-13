<?php
    $title = ' includes';
   
    include('./inc/header.php');

    $guitars =[
        ['name' => 'Vela','manufacturer' => 'PRS'],
        ['name' => 'Exporer','manufacturer' => 'Gibson'],
        ['name' => 'Strat','manufacturer' => 'Fender']
    ];
         function pluck($arr,$key){
            $result =  array_map(function($item)use($key){
               return $item[$key]; 
            },$arr);

            return $result;
    }; 
    $guitars_names= pluck($guitars,'name');


 
?>


    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">My Favorite Guitars</h1>
        </div>
      </div>
      
      <div class="row">
           <table class="table table-striped">
                  <?php

                   ?>
            </table>  
      </div>

    </div>
  </body>

</html>