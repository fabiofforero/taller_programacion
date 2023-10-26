<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Áreas</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>

<div class="container">
    <h1>Calculadora de áreas</h1>
    <h2>Selecciona una figura:</h2>


    <form action="formularios/circulo_formulario.php" method="post">
        <input type="hidden" name="tipo_figura" value="circulo">
        <input type="submit" value="Círculo">
    </form><br>

    <form action="formularios/cuadrado_formulario.php" method="post">
        <input type="hidden" name="tipo_figura" value="cuadrado">
        <input type="submit" value="Cuadrado">
    </form><br>

    <form action="formularios/rectangulo_formulario.php" method="post">
        <input type="hidden" name="tipo_figura" value="rectangulo">
        <input type="submit" value="Rectángulo">
    </form><br>

    <form action="formularios/triangulo_formulario.php" method="post">
        <input type="hidden" name="tipo_figura" value="triangulo">
        <input type="submit" value="Triángulo">
    </form><br>

    <button onclick="window.history.back()">Regresar</button>
</div>


</body>
</html>