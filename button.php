
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from management where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<label style="text-align:center">SCAN QR CODE HERE</label>
				<div class="container-fluid">
				<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
				<div class="col-md-6">
                <video id="preview" width="100%"></video>
                </div>
				<form method="POST" action="edit.php?id=<?php echo $erow['id']; ?>">
				
					<div class="row">
					
						<div class="col-lg-2">
							
						</div>
						<div class="col-lg-10">
						<input type="hidden" name="qrcode_location" id="text" readonly="" placeholder="INPUT QR CODE" class="form-control" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;"></label>
						</div>
						<div class="col-lg-10">
							<input type="hidden" name="time_out" class="form-control" value="<?php date_default_timezone_set("Africa/Lagos");echo  date("h:i:sa");?>" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning" ><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->

<script src="codex.js">
          
          </script>
          