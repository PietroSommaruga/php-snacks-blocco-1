<?php
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>
        <?php
            if (strlen($name) > 3 && strpos($mail, "@") !== false && strpos($mail, ".") !== false && ctype_digit($age) ) {
                echo "Accesso riuscito";
            } else {
                echo "Accesso Negato: <br>
                Name richiede almeno 3 caratteri, <br>
                Mail richiede i seguenti parametri: ('.' e '@'), <br>
                Age richiede solo caratteri numerici.
                ";
            }
        ?>
        
        <!-- URL: /php-snacks-blocco-1/snack-2/?name=Pietro&mail=ppp@gmail.com&age=21 -->
</body>
</html>