<?php
include __DIR__ . '/../models/curso.php';
include __DIR__ . '/../controllers/entityController.php';
include __DIR__ . '/../controllers/conexion.php';
include __DIR__ . '/../controllers/curso_controlador.php';

use controllers\curso\CursoController;
use controllers\docente\DocenteController;

$cursoController = new CursoController();
$lista = $cursoController->allData();
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
<h1>Lista de cursos</h1>
    <a href="./formularioCurso.php?operacion=add" style="font-size: 2rem; margin: 4vh 0 4vh 0; padding: 2vh; background-color: antiquewhite; border-radius: 10px; cursor: pointer">Registrar</a>
    <table>
        <thead>
            <tr style="padding: 1vh;">
                <th style="padding: 1vh;">Código</th>
                <th style="padding: 1vh;">Nombre</th>
                <th style="padding: 1vh;">Docente</th>
                
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody class="main">
            <?php
            foreach ($lista as $curso) {
                echo '<tr>';
                echo '  <td>' . $curso->get('codigo') . '</td>';
                echo '  <td>' . $curso->get('nombre') . '</td>';
                echo '  <td>' . $curso->get('docente') . '</td>';
                
                echo '  <td>'; 
                echo '      <a href="./formularioCurso.php?operacion=update&codigo=' . $curso->get('codigo') . '">Modificar</a>';
                echo '  </td>';
                echo '  <td>'; 
                echo '      <a href="./confirmarEliminacionCurso.php?codigo=' . $curso->get('codigo') . '">Eliminar</a>';
                echo '  </td>';
                echo '</tr>';
              
            }
            
            ?>
        </tbody>
    </table>
            <a href="./taller_progamacion">REGRESAR</a>
</div>
    
</body>

</html>
