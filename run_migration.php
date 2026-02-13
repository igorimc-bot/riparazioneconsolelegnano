<?php
require_once 'includes/db_connect.php';

try {
    $sql = file_get_contents('update_services_console.sql');
    $pdo->exec($sql);
    echo "Migration completed successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
