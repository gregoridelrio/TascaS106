<?php
trait Turbo
{
  public function boost()
  {
    echo "S'ha iniciat el turbo";
  }
}

class Car
{
  use Turbo;

  private string $marca;
  private string $matricula;
  private string $tipusCombustible;
  private int $velocitatMaxima;
}
