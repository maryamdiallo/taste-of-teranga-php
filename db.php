<?php
// MAMP default MySQL settings. Change these if your MAMP setup differs.
$host = '127.0.0.1';
$port = '8889';
$dbname = 'taste_of_teranga';
$username = 'root';
$password = 'root';
try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    // Do not show database passwords or error details to website visitors.
    error_log($e->getMessage());
    http_response_code(500);
    exit('Database connection failed. Check MAMP and db.php settings.');
}
