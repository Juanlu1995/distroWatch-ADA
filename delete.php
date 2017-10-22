<?php
/**
 * Created by PhpStorm.
 * User: juanlu
 * Date: 23/10/17
 * Time: 1:22
 */


include_once 'connect.php';
include_once 'config.php';

$id = $_POST['id'];

$sql = 'DELETE FROM distro WHERE id = :id LIMIT 1';

$result = $pdo->prepare($sql);

$result->execute([
    'id' => $id
]);

header('Location: index.php');
