<?php
require_once 'connection.php';



$sql = 'INSERT INTO usuarios (name, username, password) VALUES (:name, :username, :password);';

$stmt = $pdo->prepare($sql);

$_name = 'Davi Guerra18';
$_username = 'daviguerra18';
$_password = '1234567';

$stmt->bindParam(':name', $_name);
$stmt->bindParam(':username', $_username);
$stmt->bindParam(':password', $_password);

if($stmt->execute())
{
    if($stmt->rowCount() > 0)
    {
        echo 'Usuário inserido com sucesso';
    }else{
        echo 'Nenhum dado foi inserido no banco';
    }
}

