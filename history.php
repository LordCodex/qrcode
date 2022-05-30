<?php
session_start();
$_SESSION["qrcode_text"] = "login";
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

<?php

if (isset($_SESSION['id']) && isset($_SESSION['qrcode'])) {

?>
  <link rel="shortcut icon" href="<?php echo $_SESSION['img_url']; ?>" />








<?php
}
$bolu = $_SESSION['qrcode'];
?>


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
        <tr>
            <th class="numeric-sort">Name</th>
            <th class="numeric-sort">Time In</th>
            <th class="numeric-sort">Time Out</th>
            <th class="numeric-sort">Date</th>
            <th class="numeric-sort">Location</th>
            <th class="numeric-sort">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('db_conn.php');
        $qre =$_SESSION['qrcode'];

        $query = mysqli_query($conn, "SELECT * FROM `management` where qrcode='$qre' ORDER BY id DESC");
        if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $debo = $row['id'];
            ?>
            <tr>
                <td><?php echo ucwords($row['name']); ?></td>
                <td><?php echo ucwords($row['time_in']); ?></td>
                <td id="time_out"><?php echo $row['time_out']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['location']; ?></td>
                
                <td> <?php 
                
                if ($row['time_out'] == "") {
                    echo ' <a href="#edit' . $debo . '" data-toggle="modal" class="btn btn-warning" name="button"><span class="glyphicon glyphicon-edit"></span> Sign Out </a> ';
                } else {
                    echo '<button class="btn btn-success">Completed</button>';
                }
                
                ?>  <?php include('button.php'); ?></td>
               
                
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
            <th>Name</th>
            <th>Time In</th>
            <th>Time Out</th>
            <th>Date</th>
            <th>Location</th>
            <th>Action</th>
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