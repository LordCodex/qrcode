<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="home.php">
           Codex UI
          </a>
          <a class="navbar-brand brand-logo-mini" href="home.php">Codex UI</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome Back, <?php echo $_SESSION['lastname'] . $_SESSION['firstname'] ; ?></h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">           
            <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
              <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-3">
                  <i class="flag-icon  flag-icon-ng"></i>
                </div>
                <span class="profile-text font-weight-normal">English NG</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ng"></i> English NG</a>
                
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="<?php echo $_SESSION['img_url']; ?>" alt="Profile image"> <span class="font-weight-normal"> <?php echo  $_SESSION['lastname'].$_SESSION['firstname']; ?> </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                
                  <img class="img-md rounded-circle" src="<?php echo $_SESSION['img_url']; ?>" alt="Profile image"  width="100px" height="100px">
                  <p class="mb-1 mt-3"><?php echo $_SESSION['lastname'].$_SESSION['firstname']. " ".$_SESSION['othername']; ?></p>
                  <p class="font-weight-light text-muted mb-0"><?php echo $_SESSION['email']; ?></p>
                  <p class="font-weight-light text-muted mb-0"><?php echo $_SESSION['number']; ?></p>
                </div>
                <!-- <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a> -->
                <a class="dropdown-item" href="logout.php"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>