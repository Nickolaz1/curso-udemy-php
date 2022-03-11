<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <ul>
    <?php
        $cont = 0;
        while($cont < 10){
            if($cont > 4){
    ?>
                <li><?= $cont ?></li>
    <?php
            }
        $cont++;
        }
    ?>
   </ul>
</body>
</html>