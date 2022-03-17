<?php

//exemplo
$arrayNotas = [
    "aluno1" => 10,
    "aluno2" => 5,
    "aluno3" => 0,
    "aluno4" => 2,
    "aluno5" => 8,
];

$array = [
    "aluno1" => array(
        "nome" => "Julia",
        "notas" => [
            "bimestre1" => 10,
            "bimestre2" => 9,
            "bimestre3" => 10,
            "bimestre4" => 8.5,
        ]
    ),
    "aluno2" => array(
        "nome" => "Paulo",
        "notas" => [
            "bimestre1" => 7,
            "bimestre2" => 6,
            "bimestre3" => 8,
            "bimestre4" => 9.5,
        ]
    ),

    "aluno3" => array(
        "nome" => "Sarah",
        "notas" => [
            "bimestre1" => 5,
            "bimestre2" => 10,
            "bimestre3" => 8,
            "bimestre4" => 10,
        ]
    ),
];

//Utilizando for
for($i = 1; $i <= count($array); $i++){
    echo "Aluno(a): " . $array["aluno".$i]["nome"] . "<br>";
    echo "Notas: <br>";
    for($j = 1; $j <= count($array["aluno".$i]["notas"]); $j++){
        echo $j . "° bimestre: " . $array["aluno".$i]["notas"]["bimestre".$j] . ", ";
    }
    echo "<br><br>";
}

echo "<hr>";

//Utilizando foreach
foreach($array as $aluno){
    echo "Aluno(a): " . $aluno["nome"] . "<br>";
    echo "Notas: <br>";
    foreach($aluno["notas"] as $key => $data){
        echo "{$key}: {$data}, ";
    }
    echo "<br><br>";
}