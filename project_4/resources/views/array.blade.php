<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Użytkownik</h3>
    <?php
        print_r($user);
        echo "<br>";
        print_r($user['hobby']);
        echo "<br>";
        print_r($user['hobby'][0]);
        echo "<hr>";
        //=======================================================================================
        echo "Imie i nazwisko: ".$user['firstName']." ".$user['lastName']."<br>";
        echo "Miasto: ".$user['city'];
        echo "<hr>";
        //=======================================================================================
        foreach ($user['hobby'] as $key) {
            echo "<li>$key</li>";
        }
        //======================================================================================
    ?>
</body>
</html>