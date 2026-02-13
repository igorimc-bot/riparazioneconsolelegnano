<?php
// Load configuration if it exists
if (file_exists(__DIR__ . '/../config.php')) {
    $config = require __DIR__ . '/../config.php';
    $host = $config['db_host'] ?? 'localhost';
    $dbname = $config['db_name'] ?? 'arvcl_db';
    $username = $config['db_user'] ?? 'arvcl_us3r';
    $password = $config['db_pass'] ?? '#NXB^r6kmtx5xa8b';
} else {
    // Default / Fallback credentials
    $host = 'localhost';
    $dbname = 'arvcl_db';
    $username = 'arvcl_us3r';
    $password = '#NXB^r6kmtx5xa8b';
}

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch (PDOException $e) {
    // In production, log this spread, don't echo entire invalid connection details
    die("Connection failed: " . $e->getMessage());
}
?>