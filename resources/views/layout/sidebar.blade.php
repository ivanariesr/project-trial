<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/"><img alt="PT Bio Cipta Laboratories" src="{{ asset('assets/img/BCL.png') }}" class="logo-bcl"></a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">BCL</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="@yield('sdbar-dashboard')"><a href="/"><i class="fas fa-wallet"></i><span>Dashboard</span></a></li>

          <li class="menu-header">Bahan Baku</li>
          <li class="nav-item dropdown @yield('drop-bhnbaku')">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Bahan Baku</span></a>
            <ul class="dropdown-menu">
              <li class="@yield('sdbar-stokbahanbaku')"><a class="nav-link" href="/stokbahanbaku"><i class="fas fa-boxes"></i><span>Stok Bahan Baku</span></a></li>
              <li class="@yield('sdbar-inpbelibahanbaku')"><a class="nav-link" href="/inputbahanbaku"><i class="fas fa-cart-plus"></i><span>Input Bahan Baku</span></a></li>
            </ul>
          </li>

          <li class="menu-header"><span>Bahan <sup>1</sup>&frasl;<sub>2</sub> Jadi</span></a></li>
          <li class="nav-item dropdown @yield('drop-bhnstgjadi')">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-list-ul"></i><span>Bahan <sup>1</sup>&frasl;<sub>2</sub> Jadi</span></a>
            <ul class="dropdown-menu">
              <li class="@yield('sdbar-stokbahanstgjadi')"><a class="nav-link" href="/stokbahanstgjadi"><i class="fas fa-clipboard-list"></i><span>Stok Bahan <sup>1</sup>&frasl;<sub>2</sub> Jadi</span></a></li>
              <li class="@yield('sdbar-inpbahanstgjadi')"><a class="nav-link" href="/inputbahanstgjadi"><i class="fas fa-plus-square"></i><span>Input Bahan <sup>1</sup>&frasl;<sub>2</sub> Jadi</span></a></li>
            </ul>
          </li>

          <li class="menu-header"><span>Bahan Jadi</span></a></li>
          <li class="nav-item dropdown @yield('drop-bhnjadi')">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-check-double"></i><span>Bahan Jadi</span></a>
            <ul class="dropdown-menu">
              <li class="@yield('sdbar-stokbahanjadi')"><a class="nav-link" href="/stokbahanjadi"><i class="far fa-check-square"></i><span>Stok Bahan Jadi</span></a></li>
              <li class="@yield('sdbar-inpbahanjadi')"><a class="nav-link" href="/inputbahanjadi"><i class="fas fa-plus-circle"></i><span>Input Bahan Jadi</span></a></li>
            </ul>
          </li>

          <li class="menu-header"><span>Lab</span></a></li>
          <li class="@yield('sdbar-formulabahan')"><a class="nav-link" href="/formulabahan"><i class="fas fa-flask"></i><span>Formula Bahan</span></a></li>
          <li class="@yield('sdbar-datacustomer')"><a class="nav-link" href="/datacustomer"><i class="fas fa-user-friends"></i><span>Data Customer</span></a></li>
                  
          <li class="menu-header">Input</li>
          <li class="@yield('sdbar-inpjual')"><a class="nav-link" href="/inputpenjualan"><i class="fas fa-truck"></i><span>Input Penjualan</span></a></li>

          <li class="menu-header">Histori</li>
          <li class="@yield('sdbar-hisbeli')"><a class="nav-link" href="/historibahanbaku"><i class="fas fa-history"></i><span>Histori Pembelian</span></a></li>
          <li class="@yield('sdbar-hisjual')"><a class="nav-link" href="/historipenjualan"><i class="fas fa-history"></i><span>Histori Penjualan</span></a></li>

          <li class="menu-header"><span>Laporan</span></a></li>
          <li class="nav-item dropdown @yield('drop-bhnjadi')">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-print"></i><span>Cetak Laporan</span></a>
            <ul class="dropdown-menu">
              <li class="@yield('sdbar-ctkbahanjadi')"><a class="nav-link" href="/laporanbahanjadi"><i class="fas fa-scroll"></i><span>Bahan Jadi</span></a></li>
              <li class="@yield('sdbar-ctkpembelian')"><a class="nav-link" href="/laporanpembelian"><i class="fas fa-scroll"></i><span>Pembelian</span></a></li>
               <li class="@yield('sdbar-ctkpenjualan')"><a class="nav-link" href="/laporanpenjualan"><i class="fas fa-scroll"></i><span>Penjualan</span></a></li>
              <li class="@yield('sdbar-ctkkeu')"><a class="nav-link" href="/laporankeuangan"><i class="fas fa-scroll"></i>><span>Keuangan</span></a></li>
                </ul>
          </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="/" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-sign-out-alt"></i> Keluar
          </a>
        </div>
    </aside>
  </div>