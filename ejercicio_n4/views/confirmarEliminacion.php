<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="./accionDocente.php" method="post">
        <h1>Confirmar operación</h1>
        <p>¿Desea eliminar el registro?</p>
        <input type="hidden" name="codigo" value="<?php echo $_GET['codigo'] ?>">
        <input type="hidden" name="operacion" value="delete">
        <button type="submit">Si</button>
        <a href="./listaDocentes.php">No</a>
    </form>
</body>
</html>