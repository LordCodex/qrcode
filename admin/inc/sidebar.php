<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
      <img src="<?php echo $logoimg; ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">QR CODE SYSTEM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../<?php echo $_SESSION['img']; ?>" alt="profile image" class="img-circle elevation-2" >
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php  echo $_SESSION['name']; ?></a>
          
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
         
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="home" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              
            </ul>
          </li>
          

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-shield-alt"></i>
              <p>
                Security Guards
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

            <li class="nav-item">
                <a href="createnew" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New Security</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="allsecurity" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Security</p>
                </a>
              </li>
              
            </ul>
          </li>


         


          


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Check Records
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="record" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Records</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-header">SYSTEM</li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
              <p>
                Update Web Details
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
            <li class="nav-item">
            <a href="reset" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
              <p>
              Change Admin Details
                
              </p>
            </a>
          </li>

              <li class="nav-item">
                <a href="web" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Web Settings</p>
                </a>
              </li>
              
            </ul>
          </li>
        

          <li class="nav-item">
            <a href="logout" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
              <p>
               Logout
                
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>