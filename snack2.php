// Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella
documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un
numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"


<?php

$name = (strlen($_GET["name"]) > 3) ? $_GET["name"] : null;
$mail = (str_contains($_GET["mail"], "@") && str_contains($_GET["mail"], ".")) ? $_GET["mail"] : null;
$age = (is_numeric($_GET["age"])) ? $_GET["age"] : null;
$isValid = ($name && $mail && $age);

var_dump($isValid);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="snack2.php" method="GET">
        <input type="text" name="name">
        <input type="email" name="mail">
        <input type="number" name="age">

    </form>
</body>

</html>