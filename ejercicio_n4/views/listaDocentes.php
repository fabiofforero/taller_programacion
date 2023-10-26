<?php
include __DIR__ . '/../models/docente.php';
include __DIR__ . '/../controllers/entityController.php';
include __DIR__ . '/../controllers/conexion.php';
include __DIR__ . '/../controllers/docente_controlador.php';

use controllers\docente\DocenteController;

$docenteController = new DocenteController();
$lista = $docenteController->allData();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./index.css">
    <title>Docentes</title>
</head>


<style>

    .main a{
        margin: 2vh;
        color: brown;
    }

</style>
<body>
    <div class="container">
    <h1>Lista de docentes</h1>
    <a href="./formularioDocente.php?operacion=add" style="font-size: 2rem; margin: 4vh 0 4vh 0; padding: 2vh; background-color: antiquewhite; border-radius: 10px; cursor: pointer">Registrar</a>
    <table>
        <thead>
            <tr style="padding: 1vh;">
                <th style="padding: 1vh;">Código</th>
                <th style="padding: 1vh;">Nombre</th>
                <th style="padding: 1vh;">Ocupacion</th>
                
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody class="main">
            <?php
            foreach ($lista as $docente) {
                echo '<tr>';
                echo '  <td>' . $docente->get('codigo') . '</td>';
                echo '  <td>' . $docente->get('nombre') . '</td>';
                echo '  <td>' . $docente->get('ocupacion') . '</td>';
                
                echo '  <td>'; 
                echo '      <a href="formularioDocente.php?operacion=update&codigo=' . $docente->get('codigo') . '">Modificar</a>';
                echo '  </td>';
                echo '  <td>'; 
                echo '      <a href="./confirmarEliminacion.php?codigo=' . $docente->get('codigo') . '">Eliminar</a>';
                echo '  </td>';
                echo '  <td>'; 
                echo '<a href="buscarCursos.php?operacion=listar&codigo=' . $docente->get('codigo') .'&nombre='. $docente->get('nombre') . '">LISTAR CURSOS</a>';
                echo '  </td>';
                echo '</tr>';
              
            }
            
            ?>
        </tbody>
    </table>
               <a style="padding-top: 4vh;" href="../index.php">REGRESAR</a>
    </div>
    
</body>

</html>
