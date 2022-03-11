<?php

    //definir constantes
    define("MIN", 17);
    define("MAX", 45);

    //outra forma
    const min = 17;
    const max = 45;

    $idade = 25;

    echo "MIN: " . min . "<br>";
    echo "MAX: " . max . "<br>";
    echo "Idade: " . $idade . "<br><br>";

    if($idade >= min && $idade >= max){
        echo "Acesso liberado...";
    } else{
        echo "Acesso bloqueado!";
    }  

    echo "<br>" . PHP_VERSION;