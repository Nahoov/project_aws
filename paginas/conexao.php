<?php

define('HOST','database-churros.c5sgwwsm4w2a.sa-east-1.rds.amazonaws.com');
define('USER','admin');
define('PASS','cadastrochurros');
define('BASE','`database-churros`');

$conn = new mysqli('database-churros.c5sgwwsm4w2a.sa-east-1.rds.amazonaws.com',USER,PASS,BASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
