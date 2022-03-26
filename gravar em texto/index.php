<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        ul {
            list-style: none;
        }

        input,
        select,
        textarea {
            padding: 5px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <form action="action.php" method="post">
        <ul>
            <li>Nome: <input type="text" name="txtNome"></li>
            <li>E-mail: <input type="email" name="txtEmail"></li>
            <li style="margin-top: 10px;">Grave seu comentario: </li>
            <li><textarea name="txtComentario" cols="30" rows="10"></textarea></li>
            <li><input type="submit" name="btnSubmit" value="Cadastrar"></li>
        </ul>
    </form>
</body>

</html>