<?php
session_start();
include('../include/db_connect.php');

?>
<?php
	if(isset($_POST['login'])){
		$username=$_POST['form-username'];
        $password=$_POST['form-password'];
		$sql="SELECT * FROM user WHERE(user='$username' and password='$password')";
        $query=mysqli_query($con,$sql);
        $rows=mysqli_fetch_array($query);

        $username=$rows['user'];
        $password=$rows['password'];
      if($_POST['form-username']=="" && $_POST['form-password']==""){
       
		echo "<script>alert('Please enter username and password')</script>";
      }
  if($_POST['form-username']!="$username" && $_POST['form-password']!="$password" ){
    
 
		echo "<script>alert('you have  Entered wrong Username or Password')</script>";
      }
 
 if($_POST['form-username']=="$username" && $_POST['form-password']=="$password"){

    $_SESSION['username']=$username;
    $_SESSION['admin_login_status']="loged in";
   $sql=mysqli_query($con,"update admin set login_time=now() where username='$username'");
   $sql=mysqli_query($con,"update admin set active='1' where username='$username'");
    //online_user($admin);
    header("Location:dashboard.php");
 
		
	}
	}

	?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>university payment system </title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body style="background-color:#3396ff;">

        <!-- Top content -->
        <div class="top-content" >
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Admin</strong> Login Area</h1>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Designation</label>
			                        	<input type="text" name="form-username" placeholder="Designation..." 
										class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Password..." 
										class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" name="login" style="background-color:green;"class="btn">Sign in!</button>
									
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>