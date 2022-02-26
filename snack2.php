<?php
/* Snack 2
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
*/ 

$posts = [

    '10/01/2022' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],

    '10/02/2022' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],

    '15/05/2022' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$dates= array_keys($posts);
$var = array_keys($dates);

var_dump($dates);

for ($i = 0; $i < count($posts); $i++) {
    $data_print = $dates[$i];
    echo "<h1>$data_print</h1>";
    for ($j=0; $j < count($posts[$data_print]) ; $j++) { 
        echo $posts[$data_print][$j]['title']. '<br>'. $posts[$data_print][$j]['author'] . '<br>'. $posts[$data_print][$j]['text'].'<br>' ;
    }
}

/* for($i=0; $i < count($posts); $i++){
    echo "$dates[$i]<br>";
    for($j=0; $j < count($dates); $j++){
        echo $var[$j].'<br>';
       
    }
} */






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
    
    
</body>
</html>