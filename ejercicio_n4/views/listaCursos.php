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
    <title>Docentes</title>
</head>

<body>
    <h1>Lista de cursos</h1>
    <a href="./formularioCurso.php?operacion=add">Registrar</a>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Docente</th>
                
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
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
</body>

</html>