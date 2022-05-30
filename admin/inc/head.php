<?php if(isset($_SESSION['user_name'] ) == "" ){
      header("location: logout.php");
   } ?>

<?php
include "db_conn.php";


$sql = "SELECT * FROM `web` where id=1";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   $logoname = $row["logoname"];
   $logoimg = $row["logoimg"];
   $companyaddress = $row["address"];
   $companyphone = $row["phonenumber"];
   $sign =$row["Signature"];
   $bar =$row["barcode"];

   
   

   
  }
} 



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Qrcode Security</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>






 