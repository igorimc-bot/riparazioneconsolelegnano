<?php
require_once '../includes/db_connect.php';
require_once '../includes/functions.php';
check_admin_session();

$message = '';
$error = '';

if (!isset($_GET['id'])) {
    header("Location: services.php");
    exit;
}

$service_id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM services WHERE id = ?");
$stmt->execute([$service_id]);
$service = $stmt->fetch();

if (!$service) {
    header("Location: services.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $slug = $_POST['slug']; // Allow editing slug, but be careful
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];

    if (empty($slug)) {
        $slug = slugify($name);
    } else {
        $slug = slugify($slug);
    }

    try {
        $stmt = $pdo->prepare("UPDATE services SET name = ?, slug = ?, description = ?, meta_title = ?, meta_description = ?, meta_keywords = ? WHERE id = ?");
        $stmt->execute([$name, $slug, $description, $meta_title, $meta_description, $meta_keywords, $service_id]);
        $message = "Servizio aggiornato con successo!";

        // Refresh data
        $stmt = $pdo->prepare("SELECT * FROM services WHERE id = ?");
        $stmt->execute([$service_id]);
        $service = $stmt->fetch();

    } catch (PDOException $e) {
        $error = "Errore durante l'aggiornamento: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Modifica Servizio - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-light">
    <div class="container mt-5 mb-5" style="max-width: 800px;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Modifica Servizio:
                <?= htmlspecialchars($service['name']) ?>
            </h2>
            <a href="services.php" class="btn btn-secondary">Torna alla lista</a>
        </div>

        <?php if ($message): ?>
            <div class="alert alert-success">
                <?= $message ?>
            </div>
        <?php endif; ?>
        <?php if ($error): ?>
            <div class="alert alert-danger">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <div class="card shadow">
            <div class="card-body">
                <form method="POST">
                    <h5 class="card-title mb-3">Dettagli Generali</h5>
                    <div class="mb-3">
                        <label class="form-label">Nome Servizio</label>
                        <input type="text" name="name" class="form-control"
                            value="<?= htmlspecialchars($service['name']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Slug (URL)</label>
                        <input type="text" name="slug" class="form-control"
                            value="<?= htmlspecialchars($service['slug']) ?>" required>
                        <small class="text-muted">Evita di cambiare lo slug se la pagina è già indicizzata.</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione Completa</label>
                        <textarea name="description" class="form-control"
                            rows="5"><?= htmlspecialchars($service['description']) ?></textarea>
                    </div>

                    <hr class="my-4">

                    <h5 class="card-title mb-3">Ottimizzazione SEO</h5>
                    <div class="alert alert-info">
                        <strong>Guida ai Segnaposto:</strong><br>
                        Usa <code>{zone_name}</code> per inserire automaticamente il nome del comune/zona.<br>
                        Usa <code>{service_name}</code> per inserire il nome del servizio.
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control"
                            value="<?= htmlspecialchars($service['meta_title'] ?? '') ?>">
                        <small class="text-muted">Esempio: {service_name} a {zone_name} - Assistenza Rapida</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Meta Description</label>
                        <textarea name="meta_description" class="form-control"
                            rows="3"><?= htmlspecialchars($service['meta_description'] ?? '') ?></textarea>
                        <small class="text-muted">Esempio: Cerchi {service_name} a {zone_name}? Intervento rapido ed
                            economico.</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Meta Keywords</label>
                        <input type="text" name="meta_keywords" class="form-control"
                            value="<?= htmlspecialchars($service['meta_keywords'] ?? '') ?>">
                        <small class="text-muted">Separale con una virgola.</small>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">Salva Modifiche</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>