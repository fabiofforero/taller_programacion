<?php
namespace clases;

require_once 'FiguraGeometrica.php';

class Cuadrado extends FiguraGeometrica {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return pow($this->lado, 2);
    }
}
?>