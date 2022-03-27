<?php

//include ou require once, se o arquivo já tiver sido importado, não será importado novamente

//include requisita o arquivo, caso não exista dispara um warning e continua o programa
include_once('ler.php');

//require requisita o arquivo, caso não exista dispara um fatal error e finaliza o programa
require_once('gravar.php');

date_default_timezone_set("America/Sao_Paulo");

gravar(date("d/m/Y H:m:s"), "file.txt");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include e Require</title>
</head>
<body>
    <h3>
        <?php echo ler("file.txt")."<br>"; ?>
    </h3>
    <br>
</body>
</html>