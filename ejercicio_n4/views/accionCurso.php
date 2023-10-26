<?php
include __DIR__ . '/../models/curso.php';
include __DIR__ . '/../controllers/entityController.php';
include __DIR__ . '/../controllers/conexion.php';
include __DIR__ . '/../controllers/curso_controlador.php';

use controllers\curso\CursoController;
use models\Curso;

$cursoController = new CursoController();

$operacion = $_POST['operacion'];
$resultado = '';
if($operacion =='listar'){
    
}
if($operacion=='delete'){
    $resultado = $cursoController->deleteItem($_POST['codigo']);
}else{
    $curso = new curso();
    $curso->set('cod', $_POST['codigo']);
    $curso->set('nombre', $_POST['nombre']);
    $curso->set('codDocente', $_POST['codDocente']);
    $resultado = $operacion=='update'
        ? $cursoController->updateItem($curso)
        : $cursoController->addItem($curso);
}

// si $resultado == true -> guardo el registro;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <?php
    echo "<h1>$resultado</h1>";
    ?>
    <br><br>
    <a href="./listaCursos.php">REGRESAR</a>
    <br><br>
    <a href="../index.php">Ir al inicio</a>
    </div>
    


</body>
</html>