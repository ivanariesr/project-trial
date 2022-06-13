<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/"><img alt="PT Trial" src="{{ asset('assets/img/BCL.pg') }}" class="logo-bcl"></a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">TR</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="@yield('sdbar-dashboard')"><a href="/dashboard"><i class="fas fa-chart-area"></i><span>Dashboard</span></a></li>

          <li class="menu-header">Monitoring</li>
          <li class="nav-item dropdown @yield('drop-monitoring')">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-list-alt"></i><span>Data Monitoring</span></a>
            <ul class="dropdown-menu">
              <li class="@yield('sdbar-list-monitoring')"><a class="nav-link" href="/data-monitoring"><i class="fas fa-book"></i><span>List Data</span></a></li>
              <li class="@yield('sdbar-input-monitoring')"><a class="nav-link" href="/data-monitoring/create"><i class="far fa-plus-square"></i><span>Input Data</span></a></li>
            </ul>
          </li>

          <li class="menu-header">Customer</li>
          <li class="nav-item dropdown @yield('drop-customer')">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Data Customer</span></a>
            <ul class="dropdown-menu">
              <li class="@yield('sdbar-list-customer')"><a class="nav-link" href="/data-customer/"><i class="fas fa-id-card"></i><span>List Data</span></a></li>
              <li class="@yield('sdbar-input-customer')"><a class="nav-link" href="/data-customer/create"><i class="fas fa-user-plus"></i><span>Input Data</span></a></li>
            </ul>
          </li>

        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="/" class="btn btn-info btn-lg btn-block btn-icon-split">
            <i class="fas fa-sign-out-alt"></i> Keluar
          </a>
        </div>
    </aside>
  </div>