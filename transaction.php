<?php
require_once 'connection.php';

//Importar usuários, MAS se um falhar, quero fazer o rollback (nenhum usuário é importado)

$pdo->beginTransaction();



$user1 = 'Davi00001';
$sql = 'INSERT INTO usuarios (name, username, password) VALUES (:name, :username, :password)';

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':name', $user1);
$stmt->bindParam(':username', $user1);
$stmt->bindParam(':password', $user1);
$stmt->execute();
echo 'Usuário 1 inserido com sucesso';

//------

$user2 = 'Davi0002';
$sql2 = 'INSERT INTO usuarios (name, username, password) VALUES (:name, :username, :password)';

$stmt2 = $pdo->prepare($sql2);

$stmt2->bindParam(':name', $user2);
$stmt2->bindParam(':username', $user2);
$stmt2->bindParam(':password', $user2);
$stmt2->execute();
echo 'Usuário 2 inserido com sucesso';

$pdo->commit();
