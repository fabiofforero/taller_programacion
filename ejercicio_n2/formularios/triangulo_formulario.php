<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Triángulo</title>
</head>
<body>
<h1>TRIANGULO</h1>
    <form action="../calcular_area.php" method="post">
        Base: <input type="number" name="base"><br>
        Altura: <input type="number" name="altura"><br>

        <div>
        <input type="hidden" name="tipo_figura" value="triangulo">
        </div>
        <br>
        <div>
        <input type="submit" value="Calcular">
        </div>
    </form>
    <button onclick="window.history.back()">Regresar</button>
</body>
</html>