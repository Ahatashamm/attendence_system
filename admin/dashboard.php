<?php include("../include/admin_header.php"); ?>
<?php 
if(isset($_GET['collect'])){
	$id=$_GET['collect'];
	$matching=mysqli_query($con,"select * from user where id='$id' ");
	while($row=mysqli_fetch_array($matching)){
		$to=$row['email'];
		$subject="email activation";
		$body="here is you login information .please use this email and password for login. thank you";
		$password=rand();
		if($row>0){
			$insert=mysqli_query($con,"update  user set active='1',password='$password' where id='$id'");
			if($insert>0){
				$c=mail($to,$subject,$body."($to)".'&&'."($password)","From:sham@gmail.com");
				if($c>0){
					echo "<script>alert('Successfully send login information !')</script>";
	    echo "<script>window.open ('dashboard.php','_self')</script>";
}else{
	echo "<script>alert('Oops ! error occured !')</script>";
	    echo "<script>window.open ('dashboard.php','_self')</script>";
}
				}
			}
		}
	}
	


?>
<!--------------- end of header------------------------------>

        <div class="content">
            <div class="container-fluid">
                    <div class="row" style="margin:150px;">
                    <div class="col-md-12 text-center">
                        <h2>Welcome to attendence management system admin panel</h2>
                    </div>




                </div>



               
            </div>
        </div>

<!-----------footer----------------------->
<?php include("../include/admin_footer.php"); ?>
       