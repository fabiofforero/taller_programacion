<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../index.css">
    <title>Triángulo</title>
</head>
<body>

<div class="container">
<h1>TRIANGULO</h1>
    <form action="../calcular_area.php" method="post">
        <h1>Base</h1>
        <input style="height: 6vh;" type="number" name="base">
        <h1>Altura</h1>
        <input style="height: 6vh;" type="number" name="altura">

        <div>
        <input type="hidden" name="tipo_figura" value="triangulo">
        </div>
        <br>
        <div>
        <input type="submit" value="Calcular">
        </div>
    </form>
    <button style="margin-top: 2vh;" onclick="window.history.back()">Regresar</button>
</div>

</body>
</html>