<?php
    $title = ' includes';
   
    include('./inc/header.php');
   $category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT); ;
   $limit = filter_input(INPUT_GET,'limit', FILTER_VALIDATE_INT);
    
   if($category == false || $limit == false){
      die();
   }
   
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
          <h1 class="mt-5"><?= $title; ?></h1>
        </div>
      </div>
      
      <div class="row">
           <table class="table table-striped">
                  showing category: <?= $category ;?> ; 
                  Limit <?= $limit ; ?>
            </table>  
      </div>

    </div>
  </body>

</html>