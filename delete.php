<?php

require_once 'connection.php';

//$pdo

$id = 1;

$sql = 'DELETE FROM usuarios WHERE id = :id';

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

if($stmt->rowCount() > 0) {
    echo 'Usuário excluido com sucesso';
} else{
    echo 'Nenhum usuário excluído';
}


/*
 CRUD
C - CREATE - Inserir dados no banco de dados
R - READ - Ler os dados do banco de dados
U - UPDATE - Atualizar dados do banco de dados
D - DELETE - Deletar dados do banco de dados
*/