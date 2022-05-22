<?php
$type = 'mysql';
$server = 'localhost';
$db = 'code_db';
$port = '3306';
$charset = 'utf8mb4';

$options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,
];

$dsn =
try {
    $pdo = new PDO(dsn,username,password,options)
}
?>