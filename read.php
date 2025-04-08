<?php

require_once 'connection.php';

//$pdo...
$id = 1;
$sql = 'SELECT * FROM usuarios WHERE id = :id';

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$result = $stmt->execute();

//Array Associativo 
if($stmt)
{
   $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($data as $linha)
    {
        echo '<h1>'. $linha['username'] . '</h1>';
        echo '<pre>';
        var_dump($linha);
        echo '<pre>';
        echo '<hr>';
    }




//Array objeto
/*    $data = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($data as $linha)
    {
        echo '<h1>'. $linha->username. '</h1>';
        echo '<pre>';
        var_dump($linha);
        echo '<pre>';
        echo '<hr>';
    }
*/
}