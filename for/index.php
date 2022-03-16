<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <h1>Tabuada utilizando for</h1>
    <ul>
        <?php
        for($i = 1; $i <= 10; $i++){
            for($j = 1; $j <= 10; $j++){
        ?>
                <li><?= $i ?> * <?= $j ?> = <?= $i * $j ?></li>
        <?php
            }
            echo "<br>";
        }
        ?>
    </ul>
</body>
</html>