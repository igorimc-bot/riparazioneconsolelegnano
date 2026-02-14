<?php
require_once '../includes/db_connect.php';
require_once '../includes/functions.php';
check_admin_session();

// Stats
$stmt = $pdo->query("SELECT COUNT(*) FROM leads WHERE status = 'Nuovo'");
$new_leads = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT COUNT(*) FROM leads");
$total_leads = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT COUNT(*) FROM services");
$total_services = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT COUNT(*) FROM zones");
$total_zones = $stmt->fetchColumn();
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .card-stat {
            border-radius: 10px;
            border: none;
            color: white;
        }

        .bg-primary-gradient {
            background: linear-gradient(45deg, #4e73df, #224abe);
        }

        .bg-success-gradient {
            background: linear-gradient(45deg, #1cc88a, #13855c);
        }

        .bg-info-gradient {
            background: linear-gradient(45deg, #36b9cc, #258391);
        }

        .bg-warning-gradient {
            background: linear-gradient(45deg, #f6c23e, #dda20a);
        }
    </style>
</head>

<body>

    <?php include '../includes/admin_sidebar.php'; ?>

    <div class="content">
        <h2 class="mb-4">Dashboard</h2>

        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card card-stat bg-warning-gradient h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Nuovi Leads</div>
                                <div class="h5 mb-0 font-weight-bold">
                                    <?= $new_leads ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-bell fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card card-stat bg-primary-gradient h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Totale Leads</div>
                                <div class="h5 mb-0 font-weight-bold">
                                    <?= $total_leads ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-envelope-open-text fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card card-stat bg-info-gradient h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Servizi Attivi</div>
                                <div class="h5 mb-0 font-weight-bold">
                                    <?= $total_services ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-tools fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card card-stat bg-success-gradient h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Zone Coperte</div>
                                <div class="h5 mb-0 font-weight-bold">
                                    <?= $total_zones ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>