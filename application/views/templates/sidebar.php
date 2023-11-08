<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <!-- <a href="index3.html" class="brand-link">
      <img src="<?= base_url('assets/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
   </a> -->

   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <a href="<?= base_url('profile') ?>" class="d-block">
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
               <img src="<?= base_url('assets/img/profile/') . $user->image ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
               <p style="margin-bottom: 0px;"><?= $user->nama ?></p>
            </div>
         </div>
      </a>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
         <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
               <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
               </button>
            </div>
         </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
               <a href="<?= base_url('dashboard') ?>" class="nav-link <?php if ($this->uri->segment(1) == "dashboard") {
                                                                           echo "active";
                                                                        } ?>"">
                  <i class=" nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     Dashboard
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?= base_url('listpasien') ?>" class="nav-link <?php if ($this->uri->segment(1) == "listpasien") {
                                                                           echo "active";
                                                                        } ?><?php if ($this->uri->segment(1) == "tambahdatapasien") {
                                                                                 echo "active";
                                                                              } ?><?php if ($this->uri->segment(1) == "editdatapasien") {
                                                                                       echo "active";
                                                                                    } ?>">
                  <i class=" nav-icon fa fa-users"></i>
                  <p>
                     Pasien
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="<?= base_url('listrekappasien') ?>" class="nav-link <?php if ($this->uri->segment(1) == "listrekappasien") {
                                                                                 echo "active";
                                                                              } ?>">
                  <i class=" nav-icon fa fa-book"></i>
                  <p>
                     Rekap Minum Obat
                  </p>
               </a>
            </li>
             <li class="nav-item">
                 <a href="<?= base_url('diagram') ?>" class="nav-link <?php if ($this->uri->segment(1) == "diagram") {
                     echo "active";
                 } ?>">
                     <i class=" nav-icon fas fa-chart-bar"></i>
                     <p>
                         Diagram
                     </p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="<?= base_url('maps') ?>" class="nav-link <?php if ($this->uri->segment(1) == "maps") {
                     echo "active";
                 } ?>">
                     <i class="nav-icon fas fa-map-marker-alt"></i>
                     <p>
                         Maps
                     </p>
                 </a>
             </li>
            <li class="nav-header">Profil</li>
            <li class="nav-item">
               <a href="<?= base_url('profile') ?>" class="nav-link <?php if ($this->uri->segment(1) == "profile") {
                                                                        echo "active";
                                                                     } ?>">
                  <i class=" nav-icon fas fa-user"></i>
                  <p>Profil</p>
               </a>
            </li>
            <li class="nav-header">Keluar</li>
            <li class="nav-item">
               <a href="#" data-toggle="modal" data-target="#logoutModal" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>Logout</p>
               </a>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>