<?php
/**
 * Created by PhpStorm.
 * User: juanlu
 * Date: 21/10/17
 * Time: 16:47
 */

include_once "config.php";
include_once "connect.php";

$errors = [];

$vacio = 'El campo no puede estar vacío';

if (!empty($_POST)) {

    if (strlen($_POST['name']) === 0) {
        $errors['Nombre empty'] = $vacio;
    } else {
        $name = $_POST['name'];
    }
    if (strlen($_POST['osType']) === 0) {
        $errors['osType empty'] = $vacio;
    } else {
        $osType = $_POST['osType'];
    }
    if (strlen(($_POST['basedOn'])) === 0) {
        $basedOn = "";
    } else {
        $basedOn = $_POST['basedOn'];
    }
    if (strlen(($_POST['origin'])) === 0) {
       $origin = "";
    } else {
        $origin = $_POST['origin'];
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>


<div class="container">
    <ul>
        <li><a href="index.php.php" class="btn btn-primary" href="index.php.php">Inicio</a></li>
    </ul>
    <h1>Añadir distribución.</h1>
    <form action="add.php" method="post">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="">Tipo de OS</label>
            <input type="text" name="osType" id="osType" class="form-control" placeholder="Tipo de OS">
        </div>
        <div class="form-group">
            <label for="">Basado en:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Basado en...">
        </div>
        <div class="form-group">
            <label for="">Origen</label>
            <input type="text" name="origin" id="origin" class="form-control" placeholder="Origen">
        </div>
        <div class="form-group">
            <label for="">Entorno de escritorio</label>
            <input type="text" name="desktop" id="desktop" class="form-control" placeholder="Entorno de escritorio">
        </div>
        <div class="form-group">
            <label for="">Arquitecturas</label>
            <input type="text" name="architecture" id="architecture" class="form-control" placeholder="Arquitectura">
        </div>
        <div class="form-group">
            <label for="">Categoría</label>
            <input type="text" name="category" id="category" class="form-control" placeholder="Categoría">
        </div>
        <div class="form-group">
            <label for="">Estado</label>
            <input type="text" name="status" id="status" class="form-control" placeholder="Estado">
        </div>
        <button type="submit" class="btn btn-danger">Enviar</button>
    </form>

</div>
</body>
</html>
