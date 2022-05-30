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
            <li class="breadcrumb-item"><a href="#">ID CARD</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="idcard-container">
    <div class="frontidcard">
      <div class="backg-ca">

      </div>
      <div class="top">
        <img src="<?php echo $_SESSION['img_url']; ?>" alt="profile image" width="300px" height="300px">
      </div>
      <div class="bottom">
        <p class="na_me"><?php echo $_SESSION['lastname'] . $_SESSION['firstname'] . ' ' . $_SESSION['othername']; ?></p>

        <p class="desi">Security Guard</p>
        <div class="barcode">
          <img src="<?php echo $_SESSION['qr_img']; ?>" alt="">

        </div>
      </div>
      <div class="backg-bo">

        <h3 style="color:white"> Identity Card</h3>
      </div>

    </div>
    <div class="backidcard">
      <div class="backid-box">
        <p> This person whose name, photograph and siqnature appear overleaf of this card is a staff of</p>
        <img src="<?php echo $logoimg; ?>" alt="profile image" width="20%">
        <br> <br>
        <h3> <b><?php echo $logoname; ?></b></h3>
        <br>
        <h5> This I.D Card is not Transferable </h5>
        <p> If found, please return to the address below side or call; </p>
        <p> <?php echo  $companyphone; ?></p>
        <p> <?php echo  $companyaddress; ?> </p>
        <img src="<?php echo $sign; ?>" alt="profile image" width="100%">
        <div class="backbarimg">
          <img src="<?php echo $bar; ?>" alt="profile image" width="90%">
        </div>
      </div>
    </div>

  </div>

  <?php
    include "inc/footer.php";
    ?>