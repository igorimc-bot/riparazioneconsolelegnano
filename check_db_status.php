<?php
require_once 'includes/db_connect.php';

echo "<h1>Database Diagnostic</h1>";

// Check Services
$stmt = $pdo->query("SELECT COUNT(*) FROM services");
$service_count = $stmt->fetchColumn();
echo "<h2>Services Found: $service_count</h2>";
if ($service_count > 0) {
    echo "<ul>";
    $stmt = $pdo->query("SELECT name, slug, category FROM services LIMIT 5");
    while ($row = $stmt->fetch()) {
        echo "<li>{$row['name']} ({$row['slug']}) - {$row['category']}</li>";
    }
    echo "<li>...</li></ul>";
}

// Check Zones
$stmt = $pdo->query("SELECT COUNT(*) FROM zones");
$zone_count = $stmt->fetchColumn();
echo "<h2>Zones Found: $zone_count</h2>";
if ($zone_count > 0) {
    echo "<ul>";
    $stmt = $pdo->query("SELECT name, slug, type FROM zones LIMIT 5");
    while ($row = $stmt->fetch()) {
        echo "<li>{$row['name']} ({$row['slug']}) - {$row['type']}</li>";
    }
    echo "<li>...</li></ul>";
} else {
    echo "<p style='color:red;'>NO ZONES FOUND! Please run run_full_setup.php again.</p>";
}
?>