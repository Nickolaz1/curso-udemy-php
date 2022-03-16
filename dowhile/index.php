<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoWhile</title>
</head>
<body>
    <ul>
        <?php
        $i = 0;
        do{
        ?>
            <li>Valor: <?= $i ?></li>
        <?php
            $i++;
        } while($i <= 10)
        ?>
    </ul>
</body>
</html>