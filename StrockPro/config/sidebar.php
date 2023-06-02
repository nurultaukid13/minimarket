<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar"
    style="background-color: #b3c99c; display: flex; justify-content: space-between">
    <!-- Sidebar - Brand -->
    <div class="sideatas">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-text mx-3">NAVIGATOR</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Beranda -->
        <li class="nav-item <?= isset($home) ? 'active' : ''; ?>">
            <a class="nav-link" href="?#">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu
        </div>
        <?php if ($_SESSION['level'] == 'admin'): ?>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?= isset($master) ? 'active' : ''; ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#master" aria-expanded="true"
                    aria-controls="master">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data</span>
                </a>
                <div id="master" class="collapse <?= isset($master) ? 'show' : ''; ?>" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?= isset($merek) ? 'active' : ''; ?>" href="?merek">Merk</a>
                        <a class="collapse-item <?= isset($kategori) ? 'active' : ''; ?>" href="?kategori">Kategori</a>
                        <a class="collapse-item <?= isset($barang) ? 'active' : ''; ?>" href="?barang">Barang</a>
                        <a class="collapse-item <?= isset($pengguna) ? 'active' : ''; ?>" href="?pengguna">Karyawan</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?= isset($transaksi) ? 'active' : ''; ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transaksi" aria-expanded="true"
                    aria-controls="transaksi">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Catatan</span>
                </a>
                <div id="transaksi" class="collapse <?= isset($transaksi) ? 'show' : ''; ?>" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?= isset($barang_masuk) ? 'active' : ''; ?>" href="?barang_masuk">Barang
                            Masuk</a>
                        <a class="collapse-item <?= isset($barang_keluar) ? 'active' : ''; ?>" href="?barang_keluar">Barang
                            Keluar</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?= isset($laporan) ? 'active' : ''; ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laporan" aria-expanded="true"
                    aria-controls="laporan">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Cetak Laporan</span>
                </a>
                <div id="laporan" class="collapse <?= isset($laporan) ? 'show' : ''; ?>" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?= isset($lap_barang_masuk) ? 'active' : ''; ?>"
                            href="?lap_barang_masuk">Laporan
                            Barang Masuk</a>
                        <a class="collapse-item <?= isset($lap_barang_keluar) ? 'active' : ''; ?>"
                            href="?lap_barang_keluar">Laporan
                            Barang Keluar</a>
                        <a class="collapse-item <?= isset($lap_stok_barang) ? 'active' : ''; ?>"
                            href="<?= base_url(); ?>process/lap_stok_barang.php" target="_blank">Laporan Stok
                            Barang</a>
                    </div>
                </div>
            </li>
        <?php endif; ?>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline" style="padding-left: 35%">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </div>

    <div class="sidebawah">
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-cog"></i>
                <span class="pengaturan">
                    Pengaturan
        </span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#gantiPasswordModal">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Ganti Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Keluar
                </a>
            </div>
        </li>
    </div>

</ul>
<!-- End of Sidebar -->