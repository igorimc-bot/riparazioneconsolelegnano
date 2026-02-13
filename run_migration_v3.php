<?php
require_once 'includes/db_connect.php';

try {
    $sql = file_get_contents('update_services_v3.sql');
    $pdo->exec($sql);
    echo "Migration V3 completed successfully.<br>";
    echo "Services table updated with Detailed NewGEN and Retrogaming definitions.";
} catch (PDOException $e) {
    echo "Error execution migration V3: " . $e->getMessage();
}
?>