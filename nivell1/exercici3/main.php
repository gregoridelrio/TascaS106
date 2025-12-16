<?php
require_once "Dog.php";

$dog = new Dog("Manel", 5);

echo $dog->name;
echo $dog->age;
$dog->name = 'Josep';
echo $dog->name;
echo $dog;
