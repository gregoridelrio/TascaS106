<?php
class Car
{
  use Turbo;

  private string $marca;
  private string $matricula;
  private string $tipusCombustible;
  private int $velocitatMaxima;
}

trait Turbo
{
  public function boost()
  {
    echo "S'ha iniciat el turbo";
  }
}

$car = new Car("Mercedes", "55555LKJ", "Diesel", 200);
echo $car->boost();
