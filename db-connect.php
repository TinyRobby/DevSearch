<?php
dl("C:\Users\Robby Davis\php\ext\php_pdo_mysql.dll");
$type = 'mysql';
$server = 'localhost';
$db = 'code_db';
$port = '3306';
$charset = 'utf8mb4';
$username = 'root';
$password = 'rootr00tr))tR))T';
$options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,
];

$dsn ="$type:host=$server;fbname=$db;port=$port;charset=$charset";
$pdo = new PDO($dsn,$username,$password,$options);

?>