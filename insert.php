<?php
require_once 'connection.php';



$sql = 'INSERT INTO usuarios (name, username, password) VALUES (:name, :username, :password);';

$stmt = $pdo->prepare($sql);

$_name = 'Davi Guerra';
$_username = 'daviguerra';
$_password = '123456';

$stmt->bindParam(':name', $_name);
$stmt->bindParam(':username', $_username);
$stmt->bindParam(':password', $_password);

$stmt->execute();

