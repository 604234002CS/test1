<?php
$dsn = 'mysql:host=localhost;dbname=company1';
$username = 'root';
$password = '';
$option = [];
try {
    $connection = new PDO($dsn, $username, $password, $option);
    
} catch(PDOException $e) {
    
}