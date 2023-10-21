<?php
include __DIR__ . '/../models/curso.php';
include __DIR__ . '/../controllers/entityController.php';
include __DIR__ . '/../controllers/conexion.php';
include __DIR__ . '/../controllers/curso_controlador.php';

use models\Docente;
use controllers\curso\cursoController;
use models\Curso;
$cursoController = new CursoController();

$docentes = $cursoController->getDocentes();

$operacion = $_GET['operacion'];
$curso = new Curso();
if($operacion == 'update'){
    $controlador = new CursoController();
    $curso = $controlador->getItem($_GET['codigo']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar curso</title>
</head>
<body>
    <h1>Registrar curso</h1>
    <?php
        if(!isset($curso)){
            echo '<p>El registro no existe</p>';
            die();
        }
    ?>
    <form action="./accionCurso.php" method="post">
        <input type="hidden" name="operacion" value="<?php echo $operacion; ?>">
        <div>
            <label>Código:</label>
            <input 
                type="number" 
                name="codigo" 
                required 
                value="<?php echo $curso->get('codigo'); ?>"                 
                <?php echo $operacion == 'update' ? 'readonly' : '';  ?>
            >
        </div>
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" required value="<?php echo $curso->get('nombre'); ?>">
        </div>
        <div>
            <label>Docente:</label>
            <select name="codDocente">
            <?php
                foreach ($docentes as $curso) {
                    echo '<option value="' . $curso->get('codDocente') . '">' . $curso->get('nombre') . '</option>';
                }

            ?>
            </select>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>