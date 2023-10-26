<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./index.css">
    <title>Document</title>
</head>

<style>

    .container form h1{
        width: 100%;
        margin-bottom: 2vh;
    }

    .container form{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .container form button{
        margin: 4vh;
        height: 3vh;
        width: 10vh;
        font-size: 1.2rem;
        cursor: pointer;
        background-color: antiquewhite;
        border-radius: 10px;
    }

    .container form button:hover{
        transform: scale(1.02);
    }

</style>
<body>
    <div class="container">
    <form action="./accionCurso.php" method="post">
        <h1>Confirmar operación</h1>
        <p>¿Desea eliminar el registro?</p>
        <input type="hidden" name="codigo" value="<?php echo $_GET['codigo'] ?>">
        <input type="hidden" name="operacion" value="delete">
        <button type="submit">Si</button>
        <a href="../ejercicio4.php">No</a>
    </form>
    </div>
</body>
</html>