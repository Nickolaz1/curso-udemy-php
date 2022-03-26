<?php

$nome = filter_input(INPUT_POST, "txtNome", FILTER_UNSAFE_RAW);
$email = filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_EMAIL);
$comentario = filter_input(INPUT_POST, "txtComentario", FILTER_UNSAFE_RAW);

$texto = "nome: {$nome}, e-mail: {$email}, comentario: {$comentario} <br>";

gravar($texto, "file.txt");

function gravar($texto, $arquivo){
    $fp = fopen($arquivo, "a+");
    fwrite($fp, "{$texto} \r\n");
    fclose($fp);
}

function ler($arquivo){
    $fp = fopen($arquivo, "r");
    $texto = fread($fp, filesize($arquivo));
    fclose($fp);
    return $texto;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
</head>
<body>
    <ul>
        <li><a href="index.php">retornar ao formulario</a></li>
        <li><p><?= ler("file.txt") ?></p></li>
    </ul>
    
</body>
</html>