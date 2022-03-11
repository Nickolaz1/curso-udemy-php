<?php
    $soma = 5 + 2;
    $subtracao = 5 - 2;
    $multiplicacao = 5 * 2;
    $divisao = 5 / 2;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matematicos</title>
</head>
<body>
    <p>5 + 2 = <?= $soma ?></p>
    <p>5 - 2 = <?= $subtracao ?></p>
    <p>5 * 2 = <?= $multiplicacao ?></p>
    <p>5 / 2 = <?= $divisao ?></p>
    <hr>
    <p><?= ($soma * $divisao) ?></p>
</body>
</html>