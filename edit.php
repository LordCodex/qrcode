<?php
	include 'db_conn.php';
	$id=$_GET['id'];
	
	$edit=mysqli_query($conn,"select * from management where id='$id'"); 
	$frow=mysqli_fetch_array($edit);
	$locate=$frow['location'];
	$qrcode = $frow['qrcode'];

	
	

	
	$time_out=$_POST['time_out'];
	$location=$_POST['qrcode_location'];

	if ($location !== $locate )
	{
		header('location:errorcon');
	}
	
	else{
		mysqli_query($conn,"update management set  time_out='$time_out',  location='$location' where id='$id'");
	header('location:history');
	}

?>
