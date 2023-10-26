<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../index.css">
    <title>Ingrese sus notas</title>
</head>

<style>
    .container label{
        font-size: 1.2rem; padding-bottom: 2vh; padding-top: 2vh;
    }

</style>

<body>
    
<div class="container">
<?php
        $materia = $_POST['materia'];
        $cantidad_notas = $_POST['cantidad_notas'];
        $nota_minima = $_POST['nota_minima'];
        $nota_maxima = $_POST['nota_maxima'];
        echo '<h1>Ingrese sus notas para: '.$materia .'</h1>';
        echo "<form action='../view/mostrar_resultado.php' method='post'>";
        for ($i = 1; $i <= $cantidad_notas; $i++) {
            echo "<label for='nota_$i'>Nota $i:</label>";
            echo "<input type='number' id='nota_$i' name='nota_$i' step='0.1' required min='$nota_minima' max='$nota_maxima'>";
            echo "<label for='porcentaje_$i'>Porcentaje Nota $i:</label>";
            echo "<input type='number' id='porcentaje_$i' name='porcentaje_$i' step='0.1' required min='0' max='100'><br><br>";
        }
        echo "<input type='hidden' name='materia' value='$materia'>";
        echo "<input type='hidden' name='cantidad_notas' value='$cantidad_notas'>";
        echo "<input type='hidden' name='nota_minima' value='$nota_minima'>";
        echo "<input type='hidden' name='nota_maxima' value='$nota_maxima'>";
        echo "<input type='submit' value='Calcular'>";
        echo "</form>";
    ?>
    <br><br>
<div>
<button onclick="window.history.back()">Regresar</button>
</div>
</div>
    

    
</body>

</html>