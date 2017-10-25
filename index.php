<?php

include_once 'config.php';
include_once 'connect.php';


$queryResult = $pdo->query("SELECT * FROM distro");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Distro Watch</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Distro ADA</h1>
    </div>
    <br>
    <ul>
        <li><a href="add.php" class="btn btn-primary" href="add.php">Añadir distro</a></li>
    </ul>
    <div>
        <table class="table">
            <?php while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)): ?>
                <div class="list-group">
                    <tr>
                        <td>
                            <a href="distro.php?id=<?= $row['id'] ?>"
                               class="list-group-item list-group-item-action active"><?= $row['name'] ?></a>
                        </td>
                        <td>
                            <td>
                                <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                    <input type="submit" value="Borrar" class="btn btn-danger">
                                </form>
                            </td>
                            <td>
                                <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-success">Actualizar</a>
                            </td>
                        </td>

                    </tr>
                    <tr>
                        <td><a href="#" class="list-group-item list-group-item-action"><?= $row['osType'] ?></a></td>
                    </tr>
                    <?php if (strlen($row['basedOn']) > 0): ?>
                        <tr>
                            <td><a href="#"
                                   class="list-group-item list-group-item-action disabled"><?= $row['basedOn'] ?></a>
                            </td>
                        </tr>
                    <?php endif ?>
                </div>
            <? endwhile; ?>
        </table>
    </div>
</div>
</body>
</html>