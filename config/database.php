<?php
$host = 'localhost';
$db   = 'vetcare';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=localhost;port=3307;dbname=vetcare;charset=utf8mb4";
try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
};
