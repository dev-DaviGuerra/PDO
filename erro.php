<?php
require_once 'connection.php';
//pegar instancia do $pdo

$sql = 'SELECT * FROM tabelaquenaoexiste';
$pdo->query($sql);


/**
 * PDO::ERRMODE_SILENT (silencioso)
 * PDO::ERRMODE_WARNING (alerta)
 * PDO::ERRMODE_EXCEPTION (Lança exceções)
 */