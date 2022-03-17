<?php

$salario = 1576.76;
$valorAjuste;

function ajustarSalario($salario, &$valorAjuste){
    $valorAjuste = 300;
    return $salario + $valorAjuste;
}

$valorFinal = ajustarSalario($salario, $valorAjuste);
echo "O valor ajustado é de <strong>R$ {$valorFinal}</strong>, com o aumento de <strong>R$ {$valorAjuste}</strong>";