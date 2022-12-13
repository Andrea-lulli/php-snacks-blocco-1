
 <!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 


$numeri = [];



 for ($i=0; $i < 10; $i++) {

    $random = rand(1,100);
    

    if (!in_array($random, $numeri)) {

        $numeri[] = "$random";
    }
    var_dump($numeri);


    
 };
?>

