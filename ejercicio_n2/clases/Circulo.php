<?php
namespace clases;
require_once 'FiguraGeometrica.php';

class Circulo extends FiguraGeometrica {
    private $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }
}
?>