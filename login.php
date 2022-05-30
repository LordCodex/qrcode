<?php 
session_start(); 

include "db_conn.php";

if (isset($_POST['qrcode_text'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$qrcode_text = validate($_POST['qrcode_text']);


	if (empty($qrcode_text)) {
		header("Location: index.php?error=QR CODE is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE qrcode='$qrcode_text'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['qrcode'] === $qrcode_text) {
            	$_SESSION['qrcode'] = $row['qrcode'];
            	$_SESSION['firstname'] = $row['firstname'];
				$_SESSION['lastname'] = $row['lastname'];
				$_SESSION['othername'] = $row['othername'];
				$_SESSION['gender'] = $row['gender'];
				$_SESSION['dob'] = $row['dob'];
				$_SESSION['number'] = $row['number'];
				$_SESSION['img_url'] = $row['img_url'];
				$_SESSION['qr_img'] = $row['qr_img'];
				$_SESSION['email'] = $row['email'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home");
		        exit();
            }else{
				header("Location: index?error=INCORRECT QR CODE");
		        exit();
			}
		}else{
			header("Location: index?error=INCORRECT QR CODE");
	        exit();
		}
	}
	
}else{
	header("Location: index");
	exit();
}