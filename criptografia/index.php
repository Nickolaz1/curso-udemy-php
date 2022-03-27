<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia</title>
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
            <li>Usuario: <input type="text" name="txtUsuario"></li>
            <li>Senha: <input type="password" name="txtSenha"></li>
            <li><input type="submit" name="btnEnviar" value="Enviar"></li>
        </ul>
    </form>
    <br>
    <ul>
        <li><?php echo "Usuario: ".filter_input(INPUT_POST, "txtUsuario", FILTER_UNSAFE_RAW); ?></li>
        <li><?php echo "Senha: ".md5(filter_input(INPUT_POST, "txtSenha", FILTER_UNSAFE_RAW)); ?></li>
    </ul>
</body>
</html>