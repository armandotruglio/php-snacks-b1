<?php

require __DIR__ . "/data/classes.php";


$voteFilter = $_GET["vote"];

if (isset($_GET["vote"])) {
    $filteredClass = [];

    foreach ($classi as $className => $class) {
        $filteredClass[$className] = [];

        foreach ($class as $student) {
            if ($student["voto_medio"] >= $voteFilter)
                $filteredClass[$className][] = $student;
        }
    }
} else
    $filteredClass = $classi;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <h1 class="text-center py-3">CLASSES</h1>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="index.php" method="GET" class="py-3">
                    <input type="number" class="form-control mb-3" name="vote"
                        placeholder="Inserisci un filtro per il voto">
                    <button type="submit" class="btn btn-primary mx-3">FILTRA</button>
                    <button type="reset" class="btn btn-warning">RESETTA</button>
                </form>
            </div>
        </div>
        <div class="row">
            <!-- Classes name loop -->
            <?php foreach ($filteredClass as $className => $class) { ?>
                <div class="col-12">
                    <h3><?= $className ?></h3>
                </div>
                <!-- Students loop -->
                <?php foreach ($class as $student) { ?>
                    <div class="col">
                        <ul>
                            <li>
                                Id : <?= $student["id"] ?>
                            </li>
                            <li>
                                Nome : <?= $student["nome"] ?>
                            </li>
                            <li>
                                Cognome : <?= $student["cognome"] ?>
                            </li>
                            <li>
                                Anni : <?= $student["anni"] ?>
                            </li>
                            <li>
                                Media : <?= $student["voto_medio"] ?>
                            </li>
                            <li>
                                Linguaggio Preferito : <?= $student["linguaggio_preferito"] ?>
                            </li>
                            <li>
                                <img src="<?= $student["immagine"] ?>" alt="Foto">
                            </li>
                        </ul>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</body>

</html>