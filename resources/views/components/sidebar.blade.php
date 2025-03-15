<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <!-- Sidenav Menu Heading (Informasi Utama)-->
                <div class="sidenav-menu-heading">Informasi Utama</div>
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="#">
                    <div class="nav-link-icon"><i data-feather="bell"></i></div>
                    Notifikasi
                    <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                </a>

                <!-- Sidenav Menu Heading (Operasional)-->
                <div class="sidenav-menu-heading">Operasional</div>
                <a class="nav-link" href="#">
                    <div class="nav-link-icon"><i data-feather="camera"></i></div>
                    Scan Barcode
                </a>
                <!-- Sidenav Accordion (Transaksi)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseTransaksi" aria-expanded="false" aria-controls="collapseTransaksi">
                    <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                    Transaksi
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTransaksi" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="#">Barang Masuk</a>
                        <a class="nav-link" href="#">Barang Keluar</a>
                    </nav>
                </div>

                <!-- Sidenav Menu Heading (Manajemen Data & Analisis)-->
                <div class="sidenav-menu-heading">Manajemen Data & Analisis</div>
                <a class="nav-link" href="{{ route('barang.index') }}">
                    <div class="nav-link-icon"><i data-feather="package"></i></div>
                    Data Barang
                </a>
                <a class="nav-link" href="#">
                    <div class="nav-link-icon"><i data-feather="file-text"></i></div>
                    Laporan
                </a>

                <!-- Sidenav Menu Heading (Pengaturan Sistem)-->
                <div class="sidenav-menu-heading">Pengaturan Sistem</div>
                <a class="nav-link" href="#">
                    <div class="nav-link-icon"><i data-feather="settings"></i></div>
                    Pengaturan
                </a>
                <a class="nav-link" href="#">
                    <div class="nav-link-icon"><i data-feather="log-out"></i></div>
                    Logout
                </a>
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">Valerie Luna</div>
            </div>
        </div>
    </nav>
</div>