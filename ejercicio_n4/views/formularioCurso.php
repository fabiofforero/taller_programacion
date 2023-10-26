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
    <link rel="stylesheet" href="./index.css">
    <title>Registrar curso</title>
</head>
<body>
    <div class="container">
    <h1>Registrar curso</h1>
    <?php
        if(!isset($curso)){
            echo '<p>El registro no existe</p>';
            die();
        }
    ?>
    <form action="./accionCurso.php" method="post">
        <input type="hidden" name="operacion" value="<?php echo $operacion; ?>">
        <div style="margin-bottom: 2vh; margin-top: 5vh;">
            <label style="padding-bottom: 2vh; padding-top: 2vh;">Código:</label>
            <input
            style="height: 6vh; width: 10vh; margin-bottom: 1vh; border-radius: 10px; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.2);"
                type="number" 
                name="codigo" 
                required 
                value="<?php echo $curso->get('codigo'); ?>"                 
                <?php echo $operacion == 'update' ? 'readonly' : '';  ?>
            >
        </div>
        <div style="margin-bottom: 2vh;">
            <label style="padding-bottom: 2vh; padding-top: 2vh;">Nombre:</label>
            <input style="height: 6vh; width: 10vh; margin-bottom: 1vh; border-radius: 10px; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.2);" type="text" name="nombre" required value="<?php echo $curso->get('nombre'); ?>">
        </div>
        <div style="margin-bottom: 2vh;">
            <label style="padding-bottom: 2vh; padding-top: 2vh;">Docente:</label>
            <select style="height: 6vh; width: 10vh; margin-bottom: 1vh; border-radius: 10px; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.2);" name="codDocente">
            <?php
                foreach ($docentes as $curso) {
                    echo '<option value="' . $curso->get('codDocente') . '">' . $curso->get('nombre') . '</option>';
                }

            ?>
            </select>
        </div>
        <button style="height: 5vh; width: 100%; border-radius: 10px; cursor: pointer; background-color: antiquewhite; margin-top: 2vh;" type="submit">Guardar</button>
    </form>
    </div>
    
</body>
</html>