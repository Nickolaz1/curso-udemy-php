<?php

$arrayNome = array("Pedro", "Fernanda", "Lucas", "Marcos", "Joana");

//array com colchetes
$arrayNome2 = ["Valentina", "Fernanda", "Maria", "Cassandra", "Julia"];

for($i = 0; $i < count($arrayNome); $i++){
    echo $arrayNome[$i] . "<br>";
}

echo "<br>";

$i = 0;
while($i < count($arrayNome2)){
    echo $arrayNome2[$i] . "<br>";
    $i++;
}

echo "<br>";

//Atribuindo posições ao array
$arr = [];

for($i = 0; $i <= 100; $i++){
    $arr[] = $i;
}

for($i = 0; $i <= 100; $i++){
    echo $arr[$i] . " ";
    if(($i % 20) == 0)
        echo "<br>";
}