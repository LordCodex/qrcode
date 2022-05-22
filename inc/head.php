<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Qr Code Attendance</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    
   
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/mik.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
    

<?php 
session_start();
$_SESSION["qrcode_text"] = "login";

if (isset($_SESSION['id']) && isset($_SESSION['qrcode'])) {

 ?>
 <link rel="shortcut icon" href="<?php echo $_SESSION['img_url']; ?>" />
 



     

   

<?php 
}else{
     header("Location: index.php");
     exit();
}

 ?>

<div class="container-scroller">
 <?php
  include "./inc/header.php"; 
  ?>
  <div class="container-fluid page-body-wrapper">
 <?php include "./inc/sidebar.php"; 
  ?>
