<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Circulo</title>
</head>
<body>

<div class="container">
<h1>CIRCULO</h1>
<form action="../calcular_area.php" method="post">
<h1>Radio</h1>
<input style="height: 6vh;" type="number" name="radio" required><br>
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
</div>

    
</body>
</html>
