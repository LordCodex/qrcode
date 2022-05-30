<?php
session_start();
include "inc/head.php";
include "inc/header.php";
include "inc/sidebar.php";
?>
<link rel="stylesheet" href="inc/css/mik.css">
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="dist/sortable-tables.min.css">
    <script src="dist/sortable-tables.min.js" type="text/javascript"></script>





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
            <li class="breadcrumb-item"><a href="#">ID CARD</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- Main content -->
  <section class="content" style="background-color:white;">
    <div class="row">
      <div class="col-12">
       
      <div class="scrolltab" style="overflow:scroll;">

      <table id="example" class="table table-striped table-bordered sortable-table" style="width:100%">
    <thead>
				<th class="numeric-sort">Image</th>
				<th class="numeric-sort">Firstname</th>
				<th class="numeric-sort">Gender</th>
				<th class="numeric-sort">Address</th>
				<th class="numeric-sort">D.O.B</th>
				<th class="numeric-sort">Phone Number</th>
				<th class="numeric-sort">Action</th>
			</thead>
    <tbody>
        <?php
        include('db_conn.php');
       

        $query=mysqli_query($conn,"select * from `users`");
        if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $debo = $row['id'];
            ?>
            <tr>
						<td><img src="../<?php echo $row['img_url']; ?>" alt="profile image" class="img-circle elevation-2" height="50" width="50" ></td>
						<td><?php echo ucwords($row['firstname'].' '.$row['lastname'].' '.$row['othername'] ); ?></td>
						<td><?php echo ucwords($row['gender']); ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['dob']; ?></td>
						<td><?php echo $row['number']; ?></td>
						<td>
							<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
						
					</tr>

        <?php
        }}else {

        ?>
        <tr style="text-align:center">
     <td colspan="4" >No data found</td>
    </tr>
 <?php } ?>

    </tbody>
    <tfoot>
        <tr>
       <th class="numeric-sort">Image</th>
				<th class="numeric-sort">Firstname</th>
				<th class="numeric-sort">Gender</th>
				<th class="numeric-sort">Address</th>
				<th class="numeric-sort">D.O.B</th>
				<th class="numeric-sort">Phone Number</th>
				<th class="numeric-sort">Action</th>
        </tr>
    </tfoot>
</table>


      </div>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>






        <?php
        include "inc/footer.php";
        ?>

        <script>
          $(function() {
            $("#example1").DataTable({
              "responsive": true,
              "autoWidth": true,
            });
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
            });
          });
        </script>