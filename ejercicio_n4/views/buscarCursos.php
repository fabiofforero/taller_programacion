<?php
include __DIR__ . '/../models/docente.php';
include __DIR__ . '/../controllers/entityController.php';
include __DIR__ . '/../controllers/conexion.php';
include __DIR__ . '/../controllers/docente_controlador.php';

use models\Docente;
use controllers\docente\DocenteController;

$docenteController = new DocenteController();

$operacion = $_GET['operacion'];
$nombre = $_GET['nombre'];
$docente = new Docente();

if ($operacion == 'listar') {
    $controlador = new DocenteController();
    $lista = $controlador->getCursos($_GET['codigo']);
}

?>

<style>

    .container a{
        padding: 2vh;
        margin-top: 2vh;
        height: 3vh;
        width: 10vh;
        font-size: 1.2rem;
        cursor: pointer;
        background-color: antiquewhite;
        border-radius: 10px;
    }
</style>

<body>
    
<link rel="stylesheet" href="./index.css">
    <div class="container">
    <?php
    if ($lista !== null) {
        echo "<h1>Lista de cursos que imparte $nombre</h1>";
    ?>
        <table  style="margin-top: 3vh;">
        <thead>
            <tr>
                <th>Código </th>
                <th>Nombre del curso</th>
                
                
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
                echo '</tr>';
              
            }
            
            ?>
        </tbody>
        </table>
    <?php
    } else {
        echo "El docente seleccionado no tiene cursos asociados.";
    }
    ?>
    <br>
    <a href="./listaDocentes.php">REGRESAR</a>
    <br><br>
    <a href="../index.php">Ir al inicio</a>
    </div>

    
</body>

</html>