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
    <title>Docentes</title>
</head>

<body>
    <h1>Lista de docentes</h1>
    <a href="./formularioDocente.php?operacion=add">Registrar</a>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Ocupacion</th>
                
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
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
</body>

</html>