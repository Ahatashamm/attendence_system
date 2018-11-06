<?php
include("include/header.php");
?>
<?php
	if(isset($_POST['login'])){
		$user=$_POST['email'];
        $password=$_POST['password'];
		$sql="SELECT * FROM student WHERE(studentid='$user' and password='$password')";
        $query=mysqli_query($con,$sql);
        $rows=mysqli_fetch_array($query);
 //$name=$rows['studentname'];
        $user=$rows['studentid'];
        $password=$rows['password'];
      if($_POST['email']=="" && $_POST['password']==""){
       
		echo "<script>alert('Please enter email and password')</script>";
      }
  if($_POST['email']!="$user" && $_POST['password']!="$password" ){
    
 
		echo "<script>alert('you have  Entered wrong email or Password')</script>";
      }
 
 if($_POST['email'] =="$user" && $_POST['password']=="$password"){

    $_SESSION['user']=$user;
    $_SESSION['admin_login']="loged in";
   
   $sql=mysqli_query($con,"update student set active='1' where email='$user'");
    //online_user($admin);
    //header("Location:services.php");
 echo "<script>window.open('services.php','_self')</script>";
		
	}
	}

	?>
<?php
if(isset($_POST['registration'])){
	
     $name=$_POST['name'];
     $reg=$_POST['reg'];
     $dept=$_POST['dept'];
   
     $program=$_POST['program'];
   
	 $batch=$_POST['batch'];
	 $password=$_POST['password'];
	 $session=$_POST['session'];
	 
	 $semester=$_POST['semester'];
	 
	 $registration=mysqli_query($con,"INSERT INTO student 
	 VALUES('','$name','$reg','$dept','$semester','$batch','$program','$password','$session',now())");
     if($registration>0){
		  echo "<script>alert('successfully registered !')</script>";
	    echo "<script>window.open ('index.php','_self')</script>";
	 }
	 else{
		 echo "<script>alert('Oops! error occured')</script>";
	    echo "<script>window.open ('index.php','_self')</script>";
	 }
	
}

?>

	<div class="container">
		
	</div>
	
	
	
	<div id="fh5co-testimony-section" style="background-color: #b4babd; 
	height:500px; margin-top:110px; border-radius:150px;" >
		<div class="container"  >
			<div class="row" >
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box" style="margin-top:200px;">
					<h2>Welcome To Attendence Management System</h2>
					<p></p>
				</div>
			</div>
			
		</div>
	</div>


	
<!---------------------------footer area-------------------------------------------->
	
<?php
include("include/footer.php");
?>	
