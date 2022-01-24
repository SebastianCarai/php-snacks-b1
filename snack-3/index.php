<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
    $random_numbers =[];
    while (count($random_numbers) <= 15){
        $new_number = rand(1 , 15);
        if (!in_array($new_number, $random_numbers)){
            $random_numbers[] = $new_number;
        }
    }
    var_dump($random_numbers)
?>