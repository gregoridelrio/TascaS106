<?php
session_start();

$nom = $_POST['nom'];
$cognom = $_POST['cognom'];

$_SESSION['nom'] = $nom;
$_SESSION['cognom'] = $cognom;

echo "El teu nom es " . $nom . " " . $cognom . "<br>";

echo "Variables de sessió: " . $_SESSION['nom'] . " " . $_SESSION['cognom'];