<?php

$name = (strlen($_GET["name"]) > 3) ? $_GET["name"] : null;
$mail = (str_contains($_GET["mail"], "@") && str_contains($_GET["mail"], ".")) ? $_GET["mail"] : null;
$age = (is_numeric($_GET["age"])) ? $_GET["age"] : null;
$isValid = ($name && $mail && $age) ? "Accesso riuscito" : "Accesso negato";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $isValid ?></h1>
</body>

</html>