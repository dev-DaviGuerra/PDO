<?php

require_once 'connection.php';

//$pdo...
$id = 1;
//$sql = 'SELECT * FROM usuarios WHERE id = :id';

$sql = 'SELECT * FROM usuarios';

$stmt = $pdo->prepare($sql);
//$stmt->bindParam(':id', $id);
$result = $stmt->execute();


if($stmt)
{
//Array Associativo 
/*
   $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($data as $linha)
    {
        echo '<h1>'. $linha['username'] . '</h1>';
        echo '<pre>';
        var_dump($linha);
        echo '<pre>';
        echo '<hr>';
    }

*/


//Array objeto
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo '<h1>Registros encontrados: '.$stmt->rowCount().'</h1>';
    foreach ($data as $linha)
    {
        echo '<h1>'. $linha->username. '</h1>';
        echo '<pre>';
        var_dump($linha);
        echo '<pre>';
        echo '<hr>';
    }

}