<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./index.css">
    <title>Calculadora de Promedio</title>
</head>
<body>

<div class="container">
<h1>Calculadora de Promedio</h1>
    <form action="./controller/calcular.php" method="post">
        <label style="font-size: 1.2rem; padding-bottom: 2vh;" for="materia">Nombre de la materia:</label>
        <input style="height: 6vh;" type="text" id="materia" name="materia" required><br><br>

        <label style="font-size: 1.2rem; padding-bottom: 2vh;" for="cantidad_notas">Cantidad de notas:</label>
        <input style="height: 6vh;" type="number" id="cantidad_notas" name="cantidad_notas" required min="1"><br><br>

        <label style="font-size: 1.2rem; padding-bottom: 2vh;" for="nota_minima">Calificación mínima:</label>
        <input style="height: 6vh;" type="number" id="nota_minima" name="nota_minima" step="0.1" required min="0" max="10"><br><br>

        <label style="font-size: 1.2rem; padding-bottom: 2vh;" for="nota_maxima">Calificación máxima:</label>
        <input style="height: 6vh;" type="number" id="nota_maxima" name="nota_maxima" step="0.1" required min="0" max="10"><br><br>

        <input type="submit" value="Continuar">
    </form>
    <br>
    <br>
    <div>
    <button onclick="window.history.back()">Regresar</button>
    </div>
</div>
    
</body>
</html>