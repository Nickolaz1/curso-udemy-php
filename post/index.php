<?php
$arrFuncionarios = ["Valentina", "Fernanda", "Maria", "Cassandra", "Julia", "Pedro", "Fernanda", "Lucas", "Marcos", "Joana"];

//FILTER_UNSAFE_RAW é o filtro padrão de string
$nome = filter_input(INPUT_POST, "txtNome", FILTER_UNSAFE_RAW);
$email = filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_EMAIL);
$funcionario = filter_input(INPUT_POST, "slFuncionario", FILTER_UNSAFE_RAW);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <style>
        ul{
            list-style: none;
        }
        input, select{
            padding: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method="post">
        <ul>
            <li>Nome: <input type="text" name="txtNome"></li>
            <li>E-mail: <input type="email" name="txtEmail"></li>
            <li>Funcionarios:
                <select name="slFuncionario">
                    <?php
                        foreach($arrFuncionarios as $func){
                    ?>
                    <option value="<?= $func ?>"><?= $func ?></option>
                    <?php
                        }
                    ?>
                </select>
            </li>
            <li><input type="submit" name="btnSubmit" value="Cadastrar"></li>
        </ul>
    </form>
    <hr>
    <p>Nome: <?= $nome ?></p>
    <p>Email: <?= $email ?></p>
    <p>Funcionario: <?= $funcionario ?></p>
</body>
</html>