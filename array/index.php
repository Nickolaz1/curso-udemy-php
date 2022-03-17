<?php
    $arrayNome = ["Valentina", "Fernanda", "Maria", "Cassandra", "Julia", "Pedro", "Fernanda", "Lucas", "Marcos", "Joana"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Selecione seu professor</h1>
    <select name="slProfessores" id="slProfessores">
        <?php
        for($i = 0; $i < count($arrayNome); $i++){
        ?>
            <option value="<?= $arrayNome[$i] ?>"><?= $arrayNome[$i] ?></option>
        <?php
        }
        ?>
    </select>
    <button onclick="alert('Seu professor(a) é ' + document.getElementById('slProfessores').value);">Selecionar</button>
</body>
</html>