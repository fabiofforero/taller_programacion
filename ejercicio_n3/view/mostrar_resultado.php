<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultados para <?php echo $_POST['materia']; ?></h1>

    <?php
        $materia = $_POST['materia'];
        $cantidad_notas = $_POST['cantidad_notas'];
        $nota_minima = $_POST['nota_minima'];
        $nota_maxima = $_POST['nota_maxima'];
        $tnotas = "";

        $suma_notas_ponderadas = 0;
        $suma_porcentajes = 0;

        for ($i = 1; $i <= $cantidad_notas; $i++) {
            $nota = $_POST["nota_$i"];
            $porcentaje = $_POST["porcentaje_$i"];
            $suma_notas_ponderadas += ($nota * $porcentaje);
            $suma_porcentajes += $porcentaje;

            $tnotas .= "Nota $i: $nota valor porcentual: $porcentaje%<br>"; // Agregar desglose
        }

        if ($suma_porcentajes != 100) {
            echo "Los porcentajes suman $suma_porcentajes%. Asegúrese de que sumen 100% para un cálculo preciso.";
        } else {
            $promedio_ponderado = $suma_notas_ponderadas / 100; 
            $nota_minima_aprobar = ($nota_maxima + $nota_minima) / 2 + 0.5;
            
            echo "Rango de notas: de $nota_minima a $nota_maxima<br>"; 
            echo "Nota mínima para aprobar: $nota_minima_aprobar<br>";
            echo "Notas:<br>$tnotas"; 
            echo "Promedio: $promedio_ponderado<br>";

            if ($promedio_ponderado >= $nota_minima_aprobar) {
                echo "¡Felicidades, ha aprobado la materia!";
            } else {
                echo "Lo siento, no ha aprobado la materia.";
            }
        }
    ?>
    <br>
    <br>
    <div>
    <button onclick="window.history.back()">Regresar</button>
    </div>
</body>
</html>