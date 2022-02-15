<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1 - Le fa afafine sono state descritte in letteratura attraverso una varietà di etichette'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2 - Jeanne Baré, Baret o Barret (La Comelle, 27 luglio 1740 - Saint-Aulaye, 5 agosto 1807) è stata un esploratrice francese. Fece parte della spedizione'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3 - Che si contiene nei limiti dello stretto necessario, con un idea di sobrietà e frugalità'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4 - La Cattedrale progettata dalla sede italiana di Populous celebra il patrimonio artistico della città, ispirandosi a due degli edifici più rappresentativi di sempre'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5 - Indagine o ricerca critica relativa a una ricostruzione ordinata di eventi umani reciprocamente collegati secondo una linea unitaria di sviluppo (che trascende la mera successione cronologica'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6 - Il primigenio insediamento celtico che diede origine a Milano fu in seguito, da un punto di vista topografico, sovrapposto e sostituito da quello romano. Medhelan, che fu conquistata dai Romani nel 222 a.C., venne successivamente'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-3</title>
</head>
<body>
    <?php 
        foreach ($posts as $date => $items) {
            echo "$date <br> <br>";
            foreach ($items as $item) {
                echo "<div>", $item["title"], "<div>", "<div>", $item["author"], "<div>", "<div>", $item["text"], "<br>", "<br>", "<div>";
            };
            echo "<hr/>";
        }
    ?>  
</body>
</html>