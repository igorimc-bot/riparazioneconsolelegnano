<?php
require_once __DIR__ . '/../includes/db_connect.php';
require_once __DIR__ . '/../includes/functions.php';

$zones = get_all_zones($pdo);
foreach ($zones as $z) {
    echo "ID: {$z['id']} | Name: {$z['name']} | Slug: {$z['slug']} | Type: {$z['type']}\n";
}
?>