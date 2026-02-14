<style>
    .sidebar {
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        padding-top: 20px;
        width: 250px;
        background-color: #343a40;
        color: white;
        z-index: 1000;
    }

    .sidebar a {
        padding: 10px 15px;
        text-decoration: none;
        font-size: 18px;
        color: #ddd;
        display: block;
    }

    .sidebar a:hover {
        color: #fff;
        background-color: #495057;
    }
</style>

<div class="sidebar">
    <h4 class="text-center">Admin Panel</h4>
    <hr>
    <a href="index.php"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
    <a href="leads.php"><i class="fas fa-envelope me-2"></i>Leads</a>
    <a href="services.php"><i class="fas fa-tools me-2"></i>Servizi</a>
    <a href="zones.php"><i class="fas fa-map-marker-alt me-2"></i>Zone</a>
    <hr>
    <a href="change_password.php"><i class="fas fa-key me-2"></i>Cambio Password</a>
    <a href="logout.php" class="mt-3"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
</div>