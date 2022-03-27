<?php

$s = sha1("ola, mundo");
echo "sha1: {$s}";

echo "<br>";

$m = md5("PHP intermediario");
echo "md5: {$m}";

echo "<br>";

$b = base64_encode("criptografias");
echo "base64_encode: {$b}";

echo "<br>";

$b = base64_decode($b);
echo "base64_decode: {$b}";