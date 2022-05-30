<?php
   session_start();
   if(isset($_SESSION["qrcode_text"]) == "login"){
      header("location: home");
   } 
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN QRCODE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
</head>
<body>
     <form action="login" method="post">

     	<h2>LOGIN</h2>

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
                    <input type="hidden" name="qrcode_text" id="text" readonyy="" placeholder="INPUT QR CODE" class="form-control">
                   </form>

     	<button type="submit">LOGIN</button>
     	</div>
            </div>
     </form>
     <script src="codex.js">
          
          </script>
          
</body>
</html>