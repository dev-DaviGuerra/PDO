<?php
require_once 'connection.php';

//Importar usuários, MAS se um falhar, quero fazer o rollback (nenhum usuário é importado)
try {
    $pdo->beginTransaction();



    $user1 = 'Davi0001';
    $sql = 'INSERT INTO usuarios (name, username, password) VALUES (:name, :username, :password)';

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':name', $user1);
    $stmt->bindParam(':username', $user1);
    $stmt->bindParam(':password', $user1);
    $stmt->execute();

    echo 'Usuário 1 inserido com sucesso';

    $pdo->exec('SAVEPOINT user1_savepoint');


//---------------------------------------------------------------------------------


    $user2 = 'Davi0002';
    $sql2 = 'INSERT INTO usuarios (name, username, password) VALUES (:name, :username, :password)';

    $stmt2 = $pdo->prepare($sql2);

    $stmt2->bindParam(':name', $user2);
    $stmt2->bindParam(':username', $user2);
    $stmt2->bindParam(':password', $user2);
    $stmt2->execute();
    echo 'Usuário 2 inserido com sucesso';

    $pdo->exec('SAVEPOINT user2_savepoint');


//---------------------------------------------------------------------------------


    $user3 = 'Davi0003';
    $sql3 = 'INSERT INTO usuarios (name, username, password) VALUES (:name, :username, :password)';

    $stmt3 = $pdo->prepare($sql3);

    $stmt3->bindParam(':name', $user3);
    $stmt3->bindParam(':username', $user3);
    $stmt3->bindParam(':password', $user3);
    $stmt3->execute();
    echo 'Usuário 3 inserido com sucesso';

    $pdo->exec('SAVEPOINT user3_savepoint');

    $pdo->exec('ROLLBACK TO user2_savepoint');


$pdo->commit();

}catch(PDOException $e){
    echo 'Erro na transação';
}

