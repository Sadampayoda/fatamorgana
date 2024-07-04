<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Fatamorgana Coffe - Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php echo $currentPage == 'index.php' ? 'active' : ''; ?>">
            <a class="nav-link" href="../index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <!-- Nav Item - Tables -->
        <li class="nav-item <?php echo $currentPage == 'crud_barang.php' ? 'active' : ''; ?>">
            <a class="nav-link" href="../barang/crud_barang.php">
                <i class="fas fa-fw fa-cubes"></i>
                <span>Barang</span></a>
        </li>
        <!-- Nav Item - CRUD FOTO -->
        <li class="nav-item <?php echo $currentPage == 'crud_fotoDashboard.php' ? 'active' : ''; ?>">
            <a class="nav-link" href="../foto/crud_fotoDashboard.php">
                <i class="fas fa-fw fa-camera"></i>
                <span>Foto product</span></a>
        </li>
        <li class="nav-item <?php echo $currentPage == 'index.php' ? 'active' : ''; ?>">
            <a class="nav-link" href="../foto-menu/index.php">
                <i class="fas fa-fw fa-camera"></i>
                <span>Foto Menu</span></a>
        </li>
        <!-- Nav Item - data reservasi -->
        <li class="nav-item <?php echo $currentPage == 'crud_reservasi.php' ? 'active' : ''; ?>">
            <a class="nav-link" href="../reservasi/crud_reservasi.php">
                <i class="fas fa-fw fa-calendar"></i>
                <span>Reservasi</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <!-- <button class="rounded-circle border-0" id="sidebarToggle"></button> -->
        </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    
    <!-- End of Content Wrapper -->
</div>
