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
            <li class="breadcrumb-item"><a href="#">Update Admin Details</a></li>
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
	
	$fullname=$_POST['fullname'];
	$username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
	//code for image uploading
	if($_FILES['f1']['name']){
		move_uploaded_file($_FILES['f1']['tmp_name'], "../image/".$_FILES['f1']['name']);
		$img="image/".$_FILES['f1']['name'];
	}

 
	
$i= "update admin set name='$fullname', user_name='$username', password='$password', img='$img', email='$email' where id= 1";
   
    if(mysqli_query($conn, $i)){
		echo '<div class="alert alert-success"> Admin Profile updated successfully, Please Logout and Login Back To See New Changes</div>';
    }}





?>
<?php
$sql="select * from admin where id=1";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>

<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Admin Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full name</label>
                    <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="fullname" placeholder="Enter Fullname" required>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" value="<?php echo $row['user_name']; ?>" name="username" placeholder="Enter Username" required>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" value="<?php echo $row['password']; ?>" name="password" placeholder="Enter Password" required> 
                  </div>

              

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control"  placeholder="Enter email" value="<?php echo $row['email']; ?>" name="email" required >
                  </div>


                  

                  <div class="form-group">
                  <label for="exampleInputPassword1">Profile image</label>
                  <input type="file" class="form-control"  name="f1" id="" required>
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