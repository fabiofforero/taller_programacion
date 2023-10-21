<?php
require_once 'clases/FiguraGeometrica.php';
require_once 'clases/Circulo.php';
require_once 'clases/Cuadrado.php';
require_once 'clases/Rectangulo.php';
require_once 'clases/Triangulo.php';

session_start();

$tipo_figura = $_POST['tipo_figura'];

switch ($tipo_figura) {
    case 'circulo':
        $radio = $_POST['radio'];
        $circulo = new clases\Circulo($radio);
        $area = $circulo->calcularArea();
        break;
    case 'cuadrado':
        $lado = $_POST['lado'];
        $cuadrado = new clases\Cuadrado($lado);
        $area = $cuadrado->calcularArea();
        break;
    case 'rectangulo':
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $rectangulo = new clases\Rectangulo($base, $altura);
        $area = $rectangulo->calcularArea();
        break;
    case 'triangulo':
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $triangulo = new clases\Triangulo($base, $altura);
        $area = $triangulo->calcularArea();
        break;
    default:
        echo "error";
        exit;
}


echo "El área es: $area <br/> <br>";

echo '<button onclick="window.history.back()">Regresar</button>';
?>