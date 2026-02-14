<?php
require_once __DIR__ . '/../includes/db_connect.php';
require_once __DIR__ . '/../includes/functions.php';

echo "<h2>Forcing SEO Title Update</h2>";

$services = get_all_services($pdo);
foreach ($services as $s) {
    echo "Service: <b>{$s['name']}</b><br>";
    echo "Current Title: [{$s['meta_title']}]<br>";

    $new_title = $s['meta_title'];
    $changed = false;

    // Fix 1: Replace literal "Legnano" with "{zone_name}" if missing placeholder
    if (strpos($new_title, 'Legnano') !== false && strpos($new_title, '{zone_name}') === false) {
        $new_title = str_replace('Legnano', '{zone_name}', $new_title);
        $changed = true;
    }
    // Fix 2: If no "Legnano" but also no "{zone_name}", append it (Safety net)
    elseif (strpos($new_title, '{zone_name}') === false) {
        $new_title .= " {zone_name}";
        $changed = true;
    }

    if ($changed) {
        $stmt = $pdo->prepare("UPDATE services SET meta_title = ? WHERE id = ?");
        $stmt->execute([$new_title, $s['id']]);
        echo "<span style='color:green'>UPDATED to: [$new_title]</span><br>";
    } else {
        echo "<span style='color:gray'>No changes needed.</span><br>";
    }
    echo "<hr>";
}
echo "Done.";
?>