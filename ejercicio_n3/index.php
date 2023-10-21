<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Promedio</title>
</head>
<body>
    <h1>Calculadora de Promedio</h1>
    <form action="./controller/calcular.php" method="post">
        <label for="materia">Nombre de la materia:</label>
        <input type="text" id="materia" name="materia" required><br><br>

        <label for="cantidad_notas">Cantidad de notas:</label>
        <input type="number" id="cantidad_notas" name="cantidad_notas" required min="1"><br><br>

        <label for="nota_minima">Calificación mínima:</label>
        <input type="number" id="nota_minima" name="nota_minima" step="0.1" required min="0" max="10"><br><br>

        <label for="nota_maxima">Calificación máxima:</label>
        <input type="number" id="nota_maxima" name="nota_maxima" step="0.1" required min="0" max="10"><br><br>

        <input type="submit" value="Continuar">
    </form>
    <br>
    <br>
    <div>
    <button onclick="window.history.back()">Regresar</button>
    </div>
</body>
</html>