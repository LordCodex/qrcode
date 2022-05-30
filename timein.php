<?php
session_start();
$mikel =$_SESSION['lastname'] . $_SESSION['firstname'] . ' ' . $_SESSION['othername'];
?>
<?php if(isset($_SESSION["qrcode"]) == ""){
      header("location: logout.php");
   } ?>

<!DOCTYPE html>
<html>
<head>
	<title>TIME IN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
</head>
<body onLoad="javascript:getLocation()">
     <form action="timesub.php" method="post">

     	<h2>TIME IN</h2>

     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<div class="row">
                <div class="col-md-6">
                    <video id="preview" width="100%"></video>
                </div>
                <div class="col-md-6">
                   <form method="post" class="form-horizontal">
                    <label>SCAN QR CODE HERE</label>
                    <input type="hidden" name="qrcode_location" id="text" readonly="" placeholder="INPUT QR CODE" class="form-control">
                    <input id="inputel" type="hidden" value="" name="geolocation"> 
                    <input type="hidden" value="<?php echo date("Y-m-d l"); ?>" name="date">
                    <input type="hidden" value="<?php date_default_timezone_set("Africa/Lagos");echo  date("h:i:sa");?>" name="time_in">
                    <input type="hidden" value="<?php echo $mikel; ?>" name="name">
                    <input type="hidden" value="<?php echo $_SESSION['qrcode']; ?>" name="qrcode">
     	<button  onclick="getLocation()"  type="submit" name="sub">TIME IN</button>
     	</div>
            </div>
     </form>

     <script>

var inputEl = document.getElementById("inputel");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
//   x.innerHTML = "Latitude: " + position.coords.latitude + 
//   "<br>Longitude: " + position.coords.longitude;
// //   alert(position.coords.latitude)
inputEl.value = "Latitude: " + position.coords.latitude + 
  " Longitude: " + position.coords.longitude;
}
</script>
             <script src="codex.js">
          
        </script>
        
</body>
</html>