<?php
/**
 * Created by PhpStorm.
 * User: juanlu
 * Date: 21/10/17
 * Time: 15:13
 */

include_once 'connect.php';
include_once 'config.php';


$id = $_GET['id'];

$queryResult = $pdo->query("SELECT * FROM distro WHERE id=$id");

?>

<!doctype html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    
</head>
<body>
<div class="container">

    <h1>Distribución: </h1>
    <br>
    <ul>
        <li><a class="btn btn-primary" href="index.php">Inicio</a></li>
    </ul>
    <table class="table">
        <thead class="table-bordered">
        <tr class="bg-info">
            <th>Nombre</th>
            <th>Tipo de OS</th>
            <th>Basado en</th>
            <th>Origen</th>
            <th>Escritorio</th>
            <th>Arquitectura</th>
            <th>Categoría</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td scope="row" class="btn btn-success"><?=$row['name']?></td>
            <td><?=$row['osType']?></td>
            <td><?=$row['basedOn']?></td>
            <td><?=$row['origin']?></td>
            <td><?=$row['desktop']?></td>
            <td><?=$row['architecture']?></td>
            <td><?=$row['category']?></td>
            <td><?=$row['status']?></td>

        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>
