<?php
session_start();
include('../include/db_connect.php');
$username=$_SESSION['username'];

	if(session_destroy()){
		 $sql=mysqli_query($con,"update admin set logout_time=now() where username='$username'");
		 $sql=mysqli_query($con,"update admin set active='0' where username='$username'");
		 header("Location:index.php");
	}


	

?>



