<?php
session_start();
$_SESSION["qrcode_text"] = "login";
include "inc/head.php";
include "inc/header.php";
 include "inc/sidebar.php"; 
  ?>
<link rel="stylesheet" href="inc/css/mik.css">
  
<?php 

if (isset($_SESSION['id']) && isset($_SESSION['qrcode'])) {

 ?>
 <link rel="shortcut icon" href="<?php echo $_SESSION['img_url']; ?>" />
 



     

   

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
<img src="<?php echo $_SESSION['img_url']; ?>" alt="profile image" width="300px" height="300px">
</div>
<div class="profile-box-two">
  <div class="profile-details">
  <h3>Profile Details</h3>
  <h5 style="padding-bottom:.3em ; ">Last name: <?php echo $_SESSION['lastname']; ?></h5>
                                <h5 style="padding-bottom:.3em ; ">First name: <?php echo $_SESSION['firstname']; ?></h5>
                                <h5 style="padding-bottom:.3em ; ">Other name: <?php echo $_SESSION['othername']; ?></h5>
                                <h5 style="padding-bottom:.3em ; ">Email Address: <?php echo $_SESSION['email']; ?></h5>
                                <h5 style="padding-bottom:.3em ; ">Phone Number: <?php echo $_SESSION['number']; ?></h5>
                                <h5 style="padding-bottom:.3em ; ">D.O.B: <?php echo $_SESSION['dob']; ?></h5>
                                <h5 style="padding-bottom:.3em ; ">Gender: <?php echo $_SESSION['gender']; ?></h5>
                                <h5> Position: Security Guard</h5>
                            
  </div>
  <div class="qr-details">
  <img src="<?php echo $_SESSION['qr_img']; ?>" alt="">
  </div>
</div>
</div>


















 
    <?php
    include "inc/footer.php";
    ?>

    