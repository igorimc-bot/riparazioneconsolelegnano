<?php
require_once 'includes/db_connect.php';

try {
    $sql = file_get_contents('master_migration_services.sql');

    // Attempt to run the full script
    // Note: If the 'category' column already exists (e.g. user ran it twice), 
    // the ALTER TABLE might fail. We can wrap it.

    // Ideally, we'd split the SQL by command, but let's try a direct exec first.
    // If it fails on "Duplicate column", we'll catch it and proceed with data insertion.

    try {
        $pdo->exec($sql);
        echo "Master Migration completed successfully.<br>";
    } catch (PDOException $e) {
        if (strpos($e->getMessage(), "Duplicate column name") !== false) {
            echo "Category column already exists. Proceeding to update data...<br>";

            // If schema update failed, we should still run the TRUNCATE and INSERTs.
            // Let's crudely extract the part after the ALTER TABLE.
            // This is a simple fallback for this specific script structure.
            $parts = explode('TRUNCATE TABLE', $sql);
            if (count($parts) > 1) {
                $data_sql = 'TRUNCATE TABLE' . $parts[1]; // Re-add the TRUNCATE command
                $pdo->exec($data_sql);
                echo "Data updated successfully (Schema was already up to date).<br>";
            }
        } else {
            throw $e;
        }
    }

    echo "Services table is now fully aligned with V3 requirements.";

} catch (PDOException $e) {
    echo "Error execution Master Migration: " . $e->getMessage();
}
?>