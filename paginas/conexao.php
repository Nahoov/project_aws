<?php

define('HOST','databasechurros.c5sgwwsm4w2a.sa-east-1.rds.amazonaws.com');
define('USER','admin');
define('PASS','cadastrochurros');
define('BASE','databasechurros');

$conn = new mysqli('databasechurros.c5sgwwsm4w2a.sa-east-1.rds.amazonaws.com',USER,PASS,BASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
