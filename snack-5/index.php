<?php

require_once __DIR__ . "/functions/functions.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="./index.php" method="GET">
        <input type="text" name="word" placeholder="Scrivi una parola">
        <button type="submit">INVIA</button>
    </form>

    <span>
        <?php
        if (isset($_GET["word"])) {
            if (isPalindrome($_GET["word"])) {
                echo ("La parola è palindroma");
            } else {
                echo ("La parola non è palindroma");
            }
        }
        ?>


    </span>

</body>

</html>