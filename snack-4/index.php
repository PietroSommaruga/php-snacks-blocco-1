<?php
$numbersArray = [];

while (count($numbersArray) < 15) {
    $randomNumber = rand(1, 100);

    if (!in_array($randomNumber, $numbersArray)) {
        $numbersArray[] = $randomNumber;
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-4</title>
</head>
<body>
        <?php
            foreach ($numbersArray as &$number) {
                echo "$number, ";
            }
        ?>
</body>
</html>