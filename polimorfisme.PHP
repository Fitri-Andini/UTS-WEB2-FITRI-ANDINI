<?php
class Vektor {
  private $x, $y;

  public function __construct($x, $y) {
    $this->x = $x;
    $this->y = $y;
  }

  public function getX() {
    return $this->x;
  }

  public function setX($x) {
    $this->x = $x;
  }

  public function getY() {
    return $this->y;
  }

  public function setY($y) {
    $this->y = $y;
  }

  public function __toString() {
    return "($this->x, $this->y)";
  }

  public function tambah(Vektor $v) {
    $newX = $this->x + $v->getX();
    $newY = $this->y + $v->getY();
    return new Vektor($newX, $newY);
  }
}

public function main() {
  $v1 = new Vektor(1, 2);
  $v2 = new Vektor(3, 4);

  $v3 = $v1->tambah($v2);
  echo "Hasil penjumlahan: $v3\n";
}

main();