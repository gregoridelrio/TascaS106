<?php
require_once "Recurs.php";

$recurs = new Recurs("Recurs Php", Tema::PHP, "www.php.com", TipusRecurs::Video);

echo $recurs->nom . "<br>";
echo $recurs->tema->value . "<br>";
echo $recurs->url . "<br>";
echo $recurs->tipusRecurs->value . "<br>";
