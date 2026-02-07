<?php
// Try connection with 127.0.0.1
$host = '127.0.0.1';
$dbname = 'arvcl_db';
$username = 'arvcl_us3r';
$password = '#NXB^r6kmtx5xa8b';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT name, short_description FROM services WHERE slug = 'assemblaggio-pc'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        echo "DATABASE_CHECK_START\n";
        echo "service: " . $row['name'] . "\n";
        echo "short_desc: " . $row['short_description'] . "\n";
        echo "DATABASE_CHECK_END\n";
    } else {
        echo "No service found for slug 'assemblaggio-pc'\n";
    }
} catch (PDOException $e) {
    echo "Connection error with 127.0.0.1: " . $e->getMessage() . "\n";
}
?>