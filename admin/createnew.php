<?php 
session_start();
include "inc/head.php";
include "inc/header.php";
 include "inc/sidebar.php"; 
?>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="dist/sortable-tables.min.css">
    <script src="dist/sortable-tables.min.js" type="text/javascript"></script> 
    <link rel="stylesheet" href="inc/mik.css">
 <
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
            <li class="breadcrumb-item"><a href="#">CREATE NEW USER</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- Main content -->
 
 <div class="newuser" >


 <?php 





if(isset($_POST['sub'])){
	
	$firstname=$_POST['firstname'];
	$number=$_POST['number'];
    $lastname=$_POST['lastname'];
    $othername=$_POST['othername'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $u=  $firstname.''.$lastname.''.$othername ; 
	//code for image uploading
	if($_FILES['f1']['name']){
		move_uploaded_file($_FILES['f1']['tmp_name'], "../image/".$_FILES['f1']['name']);
		$img="image/".$_FILES['f1']['name'];
	}

    $qr_image="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$u&choe=UTF-8";
 
	$sql="select * from users where (qrcode='$u');";

      $res=mysqli_query($conn,$sql);

      if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($u==isset($row['qrcode']))
        {
            	echo "qrcode already exists";
        }
		
		}
else{
	$i="insert into users(qrcode,firstname,number,img_url,qr_img,lastname,othername,gender,dob,email)values('$u','$firstname','$number','$img','$qr_image','$lastname','$othername','$gender','$dob','$email')";
		if(mysqli_query($conn, $i)){
		echo "<p style='text-align:center'>Account Created successfully..! your New Security Guard Qr code is
        <br>
        <img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$u&choe=UTF-8'> <br>
                        <a href='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$u&choe=UTF-8'  class='download' download>    Download Qrcode Now </a> <br>
        </p>
        <style>
    .download{
        background-color: #212529;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        
    }
</style>
        
        ";
	}
//do your insert code here or do something (run your code)
}

   
}


?>


<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New Security Guard</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Enter FirstName" required>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control"  name="lastname" placeholder="Enter LastName" required>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Other Name</label>
                    <input type="text" class="form-control" name="othername" placeholder="Enter OtherName" required> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> D. O. B</label>
                    <input type="date" class="form-control" name="dob" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="number" class="form-control" name="number" required>
                  </div>

                  <div class="form-group">
                  <label>Gender</label>
                  <select class="form-control select2"  name="gender" style="width: 100%;" required>
                  <option value="none" selected disabled hidden>-----Select Gender-----</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control"  placeholder="Enter email" name="email" required >
                  </div>


                  

                  <div class="form-group">
                  <label for="exampleInputPassword1">Profile image</label>
                  <input type="file" class="form-control" name="f1" id="" required>
                  </div>
                 
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="sub" style="width:100%;">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->




 </div>





            <?php
include "inc/footer.php"; 

?>