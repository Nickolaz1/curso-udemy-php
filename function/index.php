<?php
// function ola($nome){
//     return "Ola, mundo! meu nome é {$nome}";
// }
// echo ola("Nickolas");

function ajuste($p1, $p2){
    return (($p1 * $p2) / 4); 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <ul>
        <?php
        for($i = 1; $i <= 10; $i++){
        ?>
            <li><?= ajuste($i, ($i * 6)) ?></li>
        <?php
        }
        ?>
    </ul>
</body>
</html>