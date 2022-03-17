<?php

$arrayFrutas = [
    "fruta1" => "Banana",
    "fruta2" => "Laranja",
    "fruta3" => "Abacaxi",
    "fruta4" => "Uva",
    "fruta5" => "Melão",
    "fruta6" => "Goiaba",
    "fruta7" => "Pera",
    "fruta8" => "Limão",
    "fruta9" => "Abacate",
    "fruta10" => "Morango",
];

// foreach($arrayFrutas as $key => $frutas){
//     echo "Key: {$key} => Value: {$frutas} <br>";
// }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <h1>Lista de frutas</h1>
    <ul>
    <?php
    foreach($arrayFrutas as $frutas){
    ?>
        <li><?= $frutas ?></li>
    <?php
    }
    ?>
    </ul>
</body>
</html>