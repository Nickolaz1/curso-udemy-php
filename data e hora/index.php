<?php

date_default_timezone_set('America/Sao_Paulo');

echo date('d/m/Y');
echo "<br>" . date('H:i:s') . "<br><br>";

$hora = date("H");

if($hora >= 0 && $hora < 6)
    echo "Boa madrugada";
elseif($hora >= 6 && $hora < 12)
    echo "Bom dia";
elseif($hora >= 12 && $hora < 18)
    echo "Boa tarde";
else
    echo "Boa noite";
