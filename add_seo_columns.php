<?php
require_once 'includes/db_connect.php';

try {
    // Check if columns exist
    $stmt = $pdo->query("SHOW COLUMNS FROM services LIKE 'meta_title'");
    if ($stmt->rowCount() == 0) {
        $pdo->exec("ALTER TABLE services ADD COLUMN meta_title VARCHAR(255) DEFAULT NULL");
        echo "Column 'meta_title' added.<br>";
    }

    $stmt = $pdo->query("SHOW COLUMNS FROM services LIKE 'meta_description'");
    if ($stmt->rowCount() == 0) {
        $pdo->exec("ALTER TABLE services ADD COLUMN meta_description TEXT DEFAULT NULL");
        echo "Column 'meta_description' added.<br>";
    }

    $stmt = $pdo->query("SHOW COLUMNS FROM services LIKE 'meta_keywords'");
    if ($stmt->rowCount() == 0) {
        $pdo->exec("ALTER TABLE services ADD COLUMN meta_keywords TEXT DEFAULT NULL");
        echo "Column 'meta_keywords' added.<br>";
    }

    echo "SEO columns check complete.<br>";

    // Update existing rows with defaults if empty
    $pdo->exec("UPDATE services SET meta_title = CONCAT(name, ' a {zone_name} - Assistenza Rapida') WHERE meta_title IS NULL");
    $pdo->exec("UPDATE services SET meta_description = CONCAT('Cerchi ', name, ' a {zone_name}? Intervento rapido ed economico. Chiama ora per un preventivo gratuito!') WHERE meta_description IS NULL");
    $pdo->exec("UPDATE services SET meta_keywords = CONCAT(name, ', assistenza computer {zone_name}, tecnico pc {zone_name}') WHERE meta_keywords IS NULL");

    echo "Default SEO values populated.";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>