<?php
require_once 'includes/db_connect.php';

try {
    $stmt = $pdo->query("SELECT id, name, short_description, description FROM services LIMIT 2");
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
        echo "Service: " . $row['name'] . "\n";
        echo "Short (first 50 chars): " . substr($row['short_description'], 0, 50) . "...\n";
        echo "Long (first 50 chars): " . substr($row['description'], 0, 50) . "...\n";
        echo "-------------------\n";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>