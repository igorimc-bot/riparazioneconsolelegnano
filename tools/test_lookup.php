<?php
require_once __DIR__ . '/../includes/db_connect.php';
require_once __DIR__ . '/../includes/functions.php';

echo "<h2>Test Lookup Zona: Castellanza</h2>";

$slug = 'castellanza';
$stmt = $pdo->prepare("SELECT * FROM zones WHERE slug = ?");
$stmt->execute([$slug]);
$zone = $stmt->fetch(PDO::FETCH_ASSOC);

if ($zone) {
    echo "Trovata! <pre>" . print_r($zone, true) . "</pre>";
} else {
    echo "NON Trovata. Provo a stampare tutte le zone:<br>";
    $all = $pdo->query("SELECT id, name, slug FROM zones")->fetchAll(PDO::FETCH_ASSOC);
    foreach ($all as $z) {
        echo "ID: {$z['id']} - Name: {$z['name']} - Slug: [{$z['slug']}]<br>";
    }
}
?>