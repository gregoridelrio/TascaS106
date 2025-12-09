<?php
class Gos {
  private $nom;
  private $edat;

  public function __construct($nom, $edat) {
      $this->nom = $nom;
      $this->edat = $edat;
  }

  public function __get($valor) {
      return $this->$valor;
  }

  public function __set($atribut, $valor) {
      $this->$atribut = $valor;
      echo "S'ha canviat l'atribut " . $atribut . " a " . $valor . "<br>";
  }

  public function __toString() {
      return "Aquest gos es diu " . $this->nom . "<br>";
  }
}

$gos = new Gos("Manel", 5);
echo $gos->__get("nom") . "<br>";
echo $gos->__get("edat") . "<br>";
echo $gos->__set("nom", "Josep") . "<br>";
echo $gos->__toString() . "<br>";