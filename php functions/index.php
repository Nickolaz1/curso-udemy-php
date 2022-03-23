<?php

$nome = "Nickolas Alexandre";

echo "{$nome} <br>";
//strlen() retorna o tamanho da string
echo "Meu nome tem ".strlen($nome)." caracteres <br>";
//substr() retorna uma quantidade x de caracteres a partir de uma determinada posição
echo "Meu segundo nome é ".substr($nome, 9, strlen($nome))."<br><br>"; 

//strtolower() retorna os caracteres minusculos
echo strtolower("HELLO WORLD LOWERCASE")."<br>";
//strtoupper() retorna os caracteres maiusculos
echo strtoupper("hello world uppercase")."<br><br>";

$msg = "<h1>Utilizando tags html no php</h1>, veja a <a href='https://www.php.net/manual/pt_BR/index.php'>documentacao</a>";
//strip_tags retira as tags html não especificadas
echo strip_tags($msg, "<a>")."<br><br>";

$comida = "Banana, Pera, Uva, Abacate";
echo "Original: {$comida} <br>";
//str_replace() altera uma parte da string, é case sensitive
$alt = str_replace("Banana", "Morango", $comida);
echo "Alterada: {$alt} <br>";
//str_ireplace() altera uma parte da string, não é case sensitive
$alt2 = str_ireplace("abacate", "Laranja", $alt);
echo "Mais alterada: {$alt2} <br><br>";

$nome_completo = "Ana Julia Santos";
//explode() divide a string em um ponto especificado e cria um array 
//nesse caso dividiu nos espaços em branco
$arrNome = explode(" ", $nome_completo);
echo "Utilizando explode e foreach <br>";
foreach($arrNome as $nome){
    echo "{$nome} <br>";
}