<?php 
session_start();
include "db_conn.php";

$front = "frontdoor";
$back = "backdoor";

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$location = mysqli_real_escape_string($conn, $_REQUEST['qrcode_location']);
$geo = mysqli_real_escape_string($conn, $_REQUEST['geolocation']);
$date = mysqli_real_escape_string($conn, $_REQUEST['date']);
$time_in = mysqli_real_escape_string($conn, $_REQUEST['time_in']);
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$qrcode = mysqli_real_escape_string($conn, $_REQUEST['qrcode']);

 
// Attempt insert query execution
if($location !== $front && $location !== $back ){
    header('location:errortime');
   
}
else{
   
    mysqli_query($conn,"INSERT INTO management (location, geolocation, date, time_in, name, qrcode) VALUES ('$location', '$geo', '$date','$time_in', '$name', '$qrcode')");
    header('location:history');
}
 
// Close connection
mysqli_close($conn);
?>

