<?php
include __DIR__ . '/../models/docente.php';
include __DIR__ . '/../controllers/entityController.php';
include __DIR__ . '/../controllers/conexion.php';
include __DIR__ . '/../controllers/docente_controlador.php';

use models\Docente;
use controllers\docente\DocenteController;

$docenteController = new DocenteController();

$ocupaciones = $docenteController->getOcupaciones();

$operacion = $_GET['operacion'];
$docente = new Docente();
if($operacion == 'update'){
    $controlador = new DocenteController();
    $docente = $controlador->getItem($_GET['codigo']);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar Docente</title>
</head>
<body>
    <h1>Registrar Docente</h1>
    <?php
        if(!isset($docente)){
            echo '<p>El registro no existe</p>';
            die();
        }
    ?>
    <form action="./accionDocente.php" method="post">
        <input type="hidden" name="operacion" value="<?php echo $operacion; ?>">
        <div>
            <label>Código:</label>
            <input 
                type="number" 
                name="codigo" 
                required 
                value="<?php echo $docente->get('codigo'); ?>"                 
                <?php echo $operacion == 'update' ? 'readonly' : '';  ?>
            >
        </div>
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" required value="<?php echo $docente->get('nombre'); ?>">
        </div>
        <div>
            <label>Ocupacion:</label>
            <select name="idOcupacion">
            <?php
                foreach ($ocupaciones as $ocupacion) {
                    echo '<option value="' . $ocupacion->get('codigo') . '">' . $ocupacion->get('nombre') . '</option>';
                }

            ?>
            </select>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>