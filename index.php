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
<ul>
    <li><a href="add.php" class="btn btn-primary" href="add.php">Añadir distro</a></li>
</ul>
    <div>
        <?php while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="list-group">
                <a href="distro.php?id=<?=$row['id']?>" class="list-group-item list-group-item-action active"><?= $row['name'] ?></a>
                <a href="#" class="list-group-item list-group-item-action"><?= $row['osType'] ?></a>
                <?php if (strlen($row['basedOn']) > 0): ?><a href="#" class="list-group-item list-group-item-action disabled"><?= $row['basedOn'] ?></a> <?php endif ?>
            </div>
        <? endwhile; ?>
    </div>
</div>
</body>
</html>