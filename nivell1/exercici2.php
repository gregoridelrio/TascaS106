<?php
$line = __LINE__;
$file = __FILE__;
$dir = __DIR__;

function funcionPrueba() {
    echo "Funcion actual: " . __FUNCTION__ . "<br>";
}

echo "Estas en la linea: " . $line . "<br>";
echo "Archivo actual: " . $file . "<br>";
echo "Directorio actual: " . $dir . "<br>";
funcionPrueba();

