<?php
require_once "Car.php";

$car = new Car("Mercedes", "55555LKJ", "Diesel", 200);
echo $car->boost();
