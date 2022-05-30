<?php
session_start();
$_SESSION["adminfine"] = "login";
include "inc/head.php";
include "inc/header.php";
 include "inc/sidebar.php"; 
  ?>
<link rel="stylesheet" href="inc/mik.css">
  
<?php 

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

 



     

   

<?php 
}
 ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="profile-box">
<div class="profile-box-one">
<h3>Profile Picture</h3>
<img src="../<?php echo $_SESSION['img']; ?>" alt="profile image" width="300px" height="300px">
</div>
<div class="profile-box-two">
  <div class="profile-details">
  <h3>Profile Details</h3>
                                <h5 style="padding-bottom:.3em ; ">Full name: <?php echo $_SESSION['name']; ?></h5>
                                <h5 style="padding-bottom:.3em ; ">Email Address: <?php echo $_SESSION['emails']; ?></h5>
                                <h5> Position: Admin</h5>
                            
  </div>
  <div class="qr-details">
  <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo $_SESSION['name']; ?>&choe=UTF-8" alt="">
  </div>
</div>
</div>


















 
    <?php
    include "inc/footer.php";
    ?>

    