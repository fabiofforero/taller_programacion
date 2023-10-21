<?php
include __DIR__ . '/../models/docente.php';
include __DIR__ . '/../controllers/entityController.php';
include __DIR__ . '/../controllers/conexion.php';
include __DIR__ . '/../controllers/docente_controlador.php';


use controllers\docente\DocenteController;
use models\Docente;

$docenteController = new DocenteController();

$operacion = $_POST['operacion'];
$resultado = '';
if($operacion=='delete'){
    $resultado = $docenteController->deleteItem($_POST['codigo']);
}else{
    $docente = new Docente();
    $docente->set('cod', $_POST['codigo']);
    $docente->set('nombre', $_POST['nombre']);
    $docente->set('idOcupacion', $_POST['idOcupacion']);
    $resultado = $operacion=='update'
        ? $docenteController->updateItem($docente)
        : $docenteController->addItem($docente);
}
if($operacion=='listar'){
    $cursos = $docenteController->getCursos($_POST['codigo']);
    echo $curso;
}

// si $resultado == true -> guardo el registro;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $resultado;
    ?>
    <br>
    <br>
    <a href="./listaDocentes.php">REGRESAR</a>
    <br><br>
    <a href="../index.php">Ir al inicio</a>

</body>
</html>