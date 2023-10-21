<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuadrado</title>
</head>
<body>
<h1>CUADRADO</h1>
    <form action="../calcular_area.php" method="post">
        Lado: <input type="number" name="lado"><br>
        <div>
        <input type="hidden" name="tipo_figura" value="cuadrado">
        </div>
        <br>
        <div>
        <input type="submit" value="Calcular">
        </div>
    </form>
    <button onclick="window.history.back()">Regresar</button>
</body>
</html>