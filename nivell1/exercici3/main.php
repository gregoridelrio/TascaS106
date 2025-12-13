<?php
require_once "Dog.php";

$dog = new Dog("Manel", 5);
echo $dog->__get("name") . "<br>";
echo $dog->__get("age") . "<br>";
echo $dog->__set("name", "Josep");
echo $dog->__toString() . "<br>";
