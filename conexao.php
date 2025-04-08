<?php

$host = 'localhost';

$username = 'root';
$password = '';
$dbname = '';
$dsn = "mysql:host=$host;$dbname"; //String de conexão com o banco de dados.

$connection = new PDO($dsn, $username, $password);

var_dump($connection);