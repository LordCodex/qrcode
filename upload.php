<?php 
function generateRandomString($length = 12) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}




?>

<?php 
include "db_conn.php";




if(isset($_POST['sub'])){
	$u=$_POST['qrcode'];
	$p=$_POST['text'];
	$c=$_POST['number'];
 
	//code for image uploading
	if($_FILES['f1']['name']){
		move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
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
	$i="insert into users(qrcode,name,number,img_url,qr_img)values('$u','$p','$c','$img','$qr_image')";
		if(mysqli_query($conn, $i)){
		echo "Account Created successfully..! your Qr code is
        <br>
        <img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$u&choe=UTF-8'> <br>
                        <a href='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$u&choe=UTF-8' download>   <div class='download'> Download Qrcode Now </div></a> <br>"
        ;
	}
//do your insert code here or do something (run your code)
}

   
}


?>
<html>
	<head>
	<meta charset="UTF-8">
	<title></title>
	</head>
	<body>
		<form method="POST" enctype="multipart/form-data">
        Name
<input type="text" name="text" required>


	<input type="hidden" name="qrcode" value="<?php echo generateRandomString();?>" required>
    <br>
	Phone Number
	<input type="number" name="number" required>
    <br>
	Image
<input type="file" name="f1" required>
<br>
<input type="submit"  value="submit" name="sub">
		</form>
	</body>
</html>


<style>
    .download{
        background-color: #4CAF50;
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