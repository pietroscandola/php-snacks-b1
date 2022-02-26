<?php 
/*
Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
*/
$box = [];

While(count($box) < 15){
    $i=0;
    $crand_number = rand(1,100);
    if(!in_array($crand_number,$box)){        
        $box[] = $crand_number;       
    }
    $i++;   
}

var_dump($box)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>
</head>
<body>
    
</body>
</html>