<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Utama</div>
                <a class="nav-link" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                @if (auth()->user()->role == 1)
                    <div class="sb-sidenav-menu-heading">Service</div>
                    <a class="nav-link" href="/item">
                        <div class="sb-nav-link-icon"><i class="fas fa-bone"></i></div>
                        Pakan & Alat
                    </a>
                    <a class="nav-link" href="/pesanan">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Pesanan
                    </a>
                    <a class="nav-link" href="/grooming">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Jadwal Grooming
                    </a>
                    <div class="sb-sidenav-menu-heading">Laporan</div>
                    <a class="nav-link" href="/pesanan/transaksi">
                        <div class="sb-nav-link-icon"><i class="fa fa-paperclip"></i></div>
                        Transaksi Pesanan
                    </a>
                    <a class="nav-link" href="/grooming/transaksi">
                        <div class="sb-nav-link-icon"><i class="fa fa-paperclip"></i></div>
                        Transaksi Grooming
                    </a>
                @endif
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ auth()->user()->name }}
        </div>
    </nav>
</div>