<?php
/**
 * Created by PhpStorm.
 * User: juanlu
 * Date: 26/10/17
 * Time: 0:53
 */

include_once "config.php";
include_once "connect.php";

$errors = [];

$vacio = 'El campo no puede estar vacío';
if (!empty($_GET)) {
    $id = $_GET['id'];
    if (!empty($_POST)) {

        $name = $_POST['name'];
        $osType = $_POST['osType'];
        $basedOn = $_POST['basedOn'];
        $origin = $_POST['origin'];
        $desktop = $_POST['desktop'];
        $architecture = $_POST['architecture'];
        $category = $_POST['category'];
        $status = $_POST['status'];


        if (strlen($_POST['name']) === 0) {
            $errors['name empty'] = $vacio;
        }
        if (strlen($_POST['osType']) === 0) {
            $errors['osType empty'] = $vacio;
        }

        if (empty($errors)) {

            $sql = "UPDATE distro SET name=:name, osType=:osType, basedOn=:basedOn, origin=:origin, desktop=:desktop, architecture=:architecture, category=:category, status=:status WHERE id=:id";

            $result = $pdo->prepare($sql);

            $result->execute([
                'name' => $name,
                'osType' => $osType,
                'basedOn' => $basedOn,
                'origin' => $origin,
                'desktop' => $desktop,
                'architecture' => $architecture,
                'category' => $category,
                'status' => $status,
                'id' => $id,
            ]);
            header('Location: index.php');
        }
    }

}else{
    header('Location: index.php');

}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
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
    <h1>Editad distribucion</h1>
    <br>
    <ul>
        <li><a class="btn btn-primary" href="index.php">Inicio</a></li>
    </ul>
    <form action="update.php" method="post">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
        </div>
        <?php if (isset($errors['name empty'])): ?>
            <p class="bg-danger"><?= $errors['name empty'] ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="">Tipo de OS</label>
            <input type="text" name="osType" id="osType" class="form-control" placeholder="Tipo de OS" required>
        </div>
        <?php if (isset($errors['osType empty'])): ?>
            <p class="bg-danger"><?= $errors['osType empty'] ?></p>
        <?php endif; ?>
        <div class="form-group">
            <label for="">Basado en:</label>
            <input type="text" name="basedOn" id="basedOn" class="form-control" placeholder="Basado en...">
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
