<?php
require_once "Recurs.php";

$recurs = new Recurs("Recurs Php", Tema::PHP, "www.php.com", TipusRecurs::Video);

echo $recurs->__get('nom') . "<br>";
echo $recurs->__get('tema')->value . "<br>";
echo $recurs->__get('url') . "<br>";
echo $recurs->__get('tipusRecurs')->value . "<br>";
