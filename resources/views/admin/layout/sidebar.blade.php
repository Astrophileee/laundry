<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('adminLTE') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Joindry</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('adminLTE') }}/dist/img/IMG.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Iqbal Maulana Asyari</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="/admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
          <li class="nav-item">
            <a href="/admin/outlet" class="nav-link">
              <i class="nav-icon fas fa-store-alt"></i>
              <p>
                Outlet
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/paket" class="nav-link">
              <i class="fas fa-archive nav-icon"></i>
              <p>Paket</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/member" class="nav-link">
              <i class="fas fa-user-friends nav-icon"></i>
              <p>Member</p>
            </a>
          </li>
          <li class="nav-header">TRANSACTION</li>
          <li class="nav-item">
            <a href="./index.html" class="nav-link">
              <i class="fas fa-cash-register nav-icon"></i>
              <p>Transaksi Baru</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./index.html" class="nav-link">
              <i class="fas fa-database nav-icon"></i>
              <p>Data Transaksi</p>
            </a>
          </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>