<?php
session_start();

$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$surname = htmlspecialchars($_POST['surname'], ENT_QUOTES, 'UTF-8');


$_SESSION['name'] = $name;
$_SESSION['surname'] = $surname;

echo "Your name is $name and your surname is $surname" . "<br>";

echo "Session variables: " . $_SESSION['name'] . " " . $_SESSION['surname'];
