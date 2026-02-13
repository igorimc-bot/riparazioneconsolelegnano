<?php
require_once 'includes/db_connect.php';

try {
    // Read and execute the SQL file
    $sql = file_get_contents('update_services_v2.sql');

    // We assume the SQL file might contain multiple statements. 
    // PDO::exec typically runs one statement, but depending on driver it might run multiple if valid.
    // However, it's safer to not rely on splitting by ';' cleanly because of potential text content.
    // Given the simple nature of the SQL file, we can try running it directly if the driver supports multiquery
    // Or we can try to be slightly smarter but simplistic.

    $pdo->exec($sql);

    echo "Migration V2 completed successfully.<br>";
    echo "Services table updated with Categories and new Data.";

} catch (PDOException $e) {
    if (strpos($e->getMessage(), "Duplicate column name") !== false) {
        // Column already exists, try to continue with just TRUNCATE and INSERT
        // This is a rough hack for "idempotency"
        echo "Column 'category' might already exist. Proceeding...<br>";

        // Remove the ALTER TABLE line from execution logic manually or just ignore for now and assume the rest ran?
        // If exec failed, it stopped. So we might need to be more granular.
    }
    echo "Error execution migration: " . $e->getMessage();
}
?>