<?php
session_start();

$name = $_POST['name'];
$surname = $_POST['surname'];

$_SESSION['name'] = $name;
$_SESSION['surname'] = $surname;

echo "Your name is " . $name . " " . $surname . "<br>";

echo "Session variables: " . $_SESSION['name'] . " " . $_SESSION['surname'];
