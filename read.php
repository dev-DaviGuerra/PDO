<?php

require_once 'connection.php';

//$pdo...

$sql = 'SELECT * FROM usuarios';

$stmt = $pdo->prepare($sql);
$result = $stmt->execute();

//Array Associativo 
if($result)
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