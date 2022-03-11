<?php
    $msg;

    switch(1){
        case 1:
            $msg = "Domingo";
            break;
        case 2:
            $msg = "Segunda";
            break;
        case 3:
            $msg = "Terça";
            break;
        case 4:
            $msg = "Quarta";
            break;
        case 5:
            $msg = "Quinta";
            break;
        case 6:
            $msg = "Sexta";
            break;
        case 7:
            $msg = "Sabado";
            break;
        default:
            $msg = "Invalido";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <h2>Ola, hoje é <?= $msg ?></h2>
</body>
</html>