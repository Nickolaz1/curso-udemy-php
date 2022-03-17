<?php

$arrNotas = [
    "aluno1" => [
        "nome" => "Gunnar",
        "nota" => 7
    ],
    "aluno2" => [
        "nome" => "Lucia",
        "nota" => 10
    ],
    "aluno3" => [
        "nome" => "Natalia",
        "nota" => 0
    ],
    "aluno4" => [
        "nome" => "Fernando",
        "nota" => 9
    ]
];

foreach($arrNotas as $aluno){
    foreach($aluno as $key => $value){
        echo "{$key} = {$value} <br>";
    }
    echo "<br>";
}