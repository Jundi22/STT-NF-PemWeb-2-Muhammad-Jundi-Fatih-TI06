  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
    <div class="image">
      <img src="<?php echo base_url('assets/img/mbl.png')?>" alt="mobil" class="brand-image bg-light img-circle" style="opacity: .9;">
    </div>
      <span class="m-2 text-light text-bold">CarsRent</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/img/user2.png')?>" class="img-circle"  alt="User Image">
        </div>
        <div class="info">
          <a href="<?=base_url('index.php/dashboard')?>" class="d-block">
          <?php
            if($this->session->has_userdata('USERNAME')){
              echo $this->session->userdata('USERNAME');
              echo ' - '.$this->session->userdata('ROLE');
            } 
            // echo $eusername['username']; 
          ?>
          </a>
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
               <li class="nav-header">Dashboard</li>
          
          <li class="nav-item">
            <a href="<?php echo base_url("index.php/mobil")?>" class="nav-link">
              <i class="nav-icon p-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-steam" viewBox="0 0 16 16">
                <path d="M.329 10.333A8.01 8.01 0 0 0 7.99 16C12.414 16 16 12.418 16 8s-3.586-8-8.009-8A8.006 8.006 0 0 0 0 7.468l.003.006 4.304 1.769A2.198 2.198 0 0 1 5.62 8.88l1.96-2.844-.001-.04a3.046 3.046 0 0 1 3.042-3.043 3.046 3.046 0 0 1 3.042 3.043 3.047 3.047 0 0 1-3.111 3.044l-2.804 2a2.223 2.223 0 0 1-3.075 2.11 2.217 2.217 0 0 1-1.312-1.568L.33 10.333Z"/>
                <path d="M4.868 12.683a1.715 1.715 0 0 0 1.318-3.165 1.705 1.705 0 0 0-1.263-.02l1.023.424a1.261 1.261 0 1 1-.97 2.33l-.99-.41a1.7 1.7 0 0 0 .882.84Zm3.726-6.687a2.03 2.03 0 0 0 2.027 2.029 2.03 2.03 0 0 0 2.027-2.029 2.03 2.03 0 0 0-2.027-2.027 2.03 2.03 0 0 0-2.027 2.027Zm2.03-1.527a1.524 1.524 0 1 1-.002 3.048 1.524 1.524 0 0 1 .002-3.048Z"/>
              </svg></i>
              <p>
                Data Mobil
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url("index.php/merk")?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Merk Mobil
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <?php
            if($this->session->userdata('ROLE')=='administrator'){
          ?>
          <li class="nav-item menu-open">
            <a href="" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Perawatan Mobil
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">              
              <li class="nav-item">
                <a href="<?=base_url('index.php/perawatan')?>" class="nav-link">
                  <i class="far fa-circle text-danger nav-icon"></i>
                  <p>Data Perawatan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">              
              <li class="nav-item">
                <a href="<?=base_url('index.php/jenis_perawatan')?>" class="nav-link">
                  <i class="far fa-circle text-info nav-icon"></i>
                  <p>Jenis Perawatan</p>
                </a>
              </li>
            </ul>
          </li>
          <?php
              }
              ?>
          <li class="nav-item">
            <a href="<?=base_url('index.php/sewa')?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Data Sewa
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <!-- <li class="nav-header">EXAMPLES</li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">              
              <li class="nav-item">
                <a href="../examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-header">Menu</li>
          <div class="form-inline">
          <li class="nav-item">
            <a href="<?= base_url();?>index.php/admin" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Pengaturan Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('index.php/auth/logout')?>" class="nav-link">
              <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
              </svg></i>
              <p>
                Logout
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          </div>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>