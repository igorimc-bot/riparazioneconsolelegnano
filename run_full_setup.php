<?php
require_once 'includes/db_connect.php';

try {
    $sql = file_get_contents('full_db_setup.sql');
    $pdo->exec($sql);
    echo "<h1>Full Database Setup Completed</h1>";
    echo "<p>Created tables: users, services, zones, leads.</p>";
    echo "<p>Inserted V3 Services data.</p>";
} catch (PDOException $e) {
    echo "<h1>Error</h1>";
    echo "<p>" . $e->getMessage() . "</p>";
}
?>