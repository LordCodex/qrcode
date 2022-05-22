<?php
include "./inc/head.php";
?>

<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Profile Image</h4>
                        <div class="aligner-wrapper" > <br>
                            <img src="<?php echo $_SESSION['img_url']; ?>" alt="" width="250px" height="250px"  >
                            
                        </div>
                        <div class="wrapper mt-4 d-flex flex-wrap align-items-cente">
                            <div class="d-flex">
                                <span class="square-indicator bg-danger ml-2"></span>
                                <p class="mb-0 ml-2">Offline </p>
                            </div>
                            <div class="d-flex">
                                <span class="square-indicator bg-success ml-2"></span>
                                <p class="mb-0 ml-2">Online Now</p>
                            </div>
                            <div class="d-flex">
                                <span class="square-indicator bg-warning ml-2"></span>
                                <p class="mb-0 ml-2">Away</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">

                    <div class="card-body performane-indicator-card " ">
                        <h3>Profile Details</h3>
                        <div class="cape" style="display:flex ; gap:2em; align-items:center;">
                        <style> 
                        @media(max-width : 991px){
                            .cape{
                               
                                flex-direction: column;
                            }
                        }
                            
                        </style>
                            <div class="mik" >
                                <h4 style="padding-bottom:.5em ; ">Last name: <?php echo $_SESSION['lastname']; ?></h4>
                                <h4 style="padding-bottom:.5em ; ">First name: <?php echo $_SESSION['firstname']; ?></h4>
                                <h4 style="padding-bottom:.5em ; ">Other name: <?php echo $_SESSION['othername']; ?></h4>
                                <h4 style="padding-bottom:.5em ; ">Email Address: <?php echo $_SESSION['email']; ?></h4>
                                <h4 style="padding-bottom:.5em ; ">Phone Number: <?php echo $_SESSION['number']; ?></h4>
                                <h4 style="padding-bottom:.5em ; ">D.O.B: <?php echo $_SESSION['dob']; ?></h4>
                                <h4 style="padding-bottom:.5em ; ">Gender: <?php echo $_SESSION['gender']; ?></h4>
                            </div>
                            <div class="mik">
                            
                                <img src="<?php echo $_SESSION['qr_img']; ?>" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <!-- <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center mb-4">
                            <h4 class="card-title mb-sm-0">Recent Guard History</h4>
                            <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all History</a>
                        </div>
                        <div class="table-responsive border rounded p-1">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">Store ID</th>
                                        <th class="font-weight-bold">Amount</th>
                                        <th class="font-weight-bold">Gateway</th>
                                        <th class="font-weight-bold">Created at</th>
                                        <th class="font-weight-bold">Paid at</th>
                                        <th class="font-weight-bold">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="img-sm rounded-circle" src="images/faces/face1.jpg" alt="profile image"> Katie Holmes
                                        </td>
                                        <td>$3621</td>
                                        <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                                        <td>04 Jun 2019</td>
                                        <td>18 Jul 2019</td>
                                        <td>
                                            <div class="badge badge-success p-2">Paid</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-sm rounded-circle" src="images/faces/face2.jpg" alt="profile image"> Minnie Copeland
                                        </td>
                                        <td>$6245</td>
                                        <td><img src="images/dashboard/paypal.png" alt="alipay" class="gateway-icon mr-2"> Paypal</td>
                                        <td>25 Sep 2019</td>
                                        <td>07 Oct 2019</td>
                                        <td>
                                            <div class="badge badge-danger p-2">Pending</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-sm rounded-circle" src="images/faces/face3.jpg" alt="profile image"> Rodney Sims
                                        </td>
                                        <td>$9265</td>
                                        <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                                        <td>12 dec 2019</td>
                                        <td>26 Aug 2019</td>
                                        <td>
                                            <div class="badge badge-warning p-2">Failed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-sm rounded-circle" src="images/faces/face4.jpg" alt="profile image"> Carolyn Barker
                                        </td>
                                        <td>$2263</td>
                                        <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                                        <td>30 Sep 2019</td>
                                        <td>20 Oct 2019</td>
                                        <td>
                                            <div class="badge badge-success p-2">Paid</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex mt-4 flex-wrap">
                            <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                            <nav class="ml-auto">
                                <ul class="pagination separated pagination-info">
                                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- content-wrapper ends -->

    <!-- <br>
  
      <h2>   Your Qr code is: <br><img src="<?php echo $_SESSION['qr_img']; ?>" alt=""></h2>
      <p> <a href="timein.php">Mark Attendance</a></p>
  -->


    <?php
    include "./inc/foot.php";
    ?>
    <?php
    include "./inc/footer.php";
    ?>