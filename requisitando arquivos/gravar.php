<?php

function gravar($texto, $arquivo){
    $fp = fopen($arquivo, "a+");
    fwrite($fp, "{$texto} <br> \r\n");
    fclose($fp);
}