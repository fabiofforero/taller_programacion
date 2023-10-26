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
    <link rel="stylesheet" href="./index.css">
    <title>Registrar Docente</title>
</head>
<body>
    <div class="container">
    <h1>Registrar Docente</h1>
    <?php
        if(!isset($docente)){
            echo '<p>El registro no existe</p>';
            die();
        }
    ?>
    <form action="./accionDocente.php" method="post" class="container2">
        <input type="hidden" name="operacion" value="<?php echo $operacion; ?>">
        <div style="margin-bottom: 2vh;">
            <label style="padding-bottom: 2vh; padding-top: 2vh;">Código:</label>
            <input 
                style="height: 6vh; width: 10vh; margin-bottom: 1vh; border-radius: 10px; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.2);"
                type="number" 
                name="codigo" 
                required 
                value="<?php echo $docente->get('codigo'); ?>"                 
                <?php echo $operacion == 'update' ? 'readonly' : '';  ?>
            >
        </div>
        <div style="margin-bottom: 2vh;">
            <label style="padding-bottom: 2vh; padding-top: 2vh;">Nombre:</label>
            <input style="height: 6vh; width: 10vh; margin-bottom: 1vh; border-radius: 10px; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.2);" type="text" name="nombre" required value="<?php echo $docente->get('nombre'); ?>">
        </div>
        <div style="margin-bottom: 2vh;">
            <label style="padding-bottom: 2vh; padding-top: 2vh;">Ocupacion:</label>
            <select style="height: 6vh; width: 10vh; margin-bottom: 1vh; border-radius: 10px; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.2);" name="idOcupacion">
            <?php
                foreach ($ocupaciones as $ocupacion) {
                    echo '<option value="' . $ocupacion->get('codigo') . '">' . $ocupacion->get('nombre') . '</option>';
                }

            ?>
            </select>
        </div>
        <button style="height: 5vh; width: 100%; border-radius: 10px; cursor: pointer; background-color: antiquewhite;" type="submit">Guardar</button>
    </form>
    
    </div>
    
</body>
</html>