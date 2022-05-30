<?php
	include('db_conn.php');
	
	$id=$_GET['id'];
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$othername=$_POST['othername'];
	$number=$_POST['number'];
	$email=$_POST['email'];

	
	mysqli_query($conn,"update users set firstname='$firstname', lastname='$lastname', othername='$othername', number='$number', email='$email' where id='$id'");
	header('location:allsecurity');

?>