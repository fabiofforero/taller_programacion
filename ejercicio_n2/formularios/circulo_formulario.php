<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circulo</title>
</head>
<body>
<h1>CIRCULO</h1>
<form action="../calcular_area.php" method="post">

    Radio: <input type="number" name="radio"><br>
    <div>
        <input type="hidden" name="tipo_figura" value="circulo">
    </div>
    <br>
    <div>
    <input type="submit" value="Calcular">
    </div>
    <br>
</form>
<br>
<button onclick="window.history.back()">Regresar</button>
    
</body>
</html>