<?php   

    $Matchs = [

        [
            "home" => "Miami Heat",
            "guests" => "New York Knicks",
            "homePoints" => 70,
            "guestsPoints" => 72,
        ],
        [
            "home" => "Chicago Bulls",
            "guests" => "Indiana Pcaers",
            "homePoints" => 62,
            "guestsPoints" => 70,
        ],
        [
            "home" => "Boston Celtics",
            "guests" => "Houston Rockets",
            "homePoints" => 80, 
            "guestsPoints" => 78,
        ],
        [
            "home" => "La Clippers",
            "guests" => "Golden State Warriors",
            "homePoints" => 80,
            "guestsPoints" => 90,
        ],
        [
            "home" => "Oklahoma City Thunder",
            "guests" => "Los Andgeles Lakers",
            "homePoints" => 75,
            "guestsPoints" => 76,
        ],
        [
            "home" => "New Orleans Pelicans",
            "guests" => "San Antonio Spurs",
            "homePoints" => 70,
            "guestsPoints" => 85, 
        ],
        [
            "home" => "Denver Nuggets",
            "guests" => "Indiana Pacers",
            "homePoints" => 80,
            "guestsPoints" => 69,
        ],
        [
            "home" => "Milwaukee Bucks",
            "guests" => "Detroit Pistons",
            "homePoints" => 51,
            "guestsPoints" => 75,
        ],
        [
            "home" => "Utah Jazz",
            "guests" => "Sacramento Kings",
            "homePoints" => 73,
            "guestsPoints" => 85
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>
<body>

    <h1>NBA MATCHS</h1>
     
    <ul>
        <?php 
            for($i = 0; $i < count($Matchs); $i++){
                echo "<li>". $Matchs[$i]["home"]. " - ". $Matchs[$i]["guests"]. " / ". $Matchs[$i]["homePoints"]. " - ". $Matchs[$i]["guestsPoints"]. "</li>";
            }
        ?>
    </ul>

</body>
</html>