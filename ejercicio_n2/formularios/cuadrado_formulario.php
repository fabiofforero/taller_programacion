<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../index.css">
    <title>Cuadrado</title>
</head>
<body>

<div class="container">
<h1>CUADRADO</h1>
<form action="../calcular_area.php" method="post">
        <h1>Lado</h1>
    <input style="height: 6vh;" type="number" name="lado" required><br>
        <div>
        <input style="margin-bottom: 3vh;" type="hidden" name="tipo_figura" value="cuadrado">
        </div>
        <div>
        <input type="submit" value="Calcular">
        </div>
    </form>
    <button style="margin-top: 2vh;" onclick="window.history.back()">Regresar</button>
</div>
    
</body>
</html>
