<?php
session_start();
include("include/db_connect.php");

if(isset($_SESSION['user'])){
	$user=$_SESSION['user'];
	$us=mysqli_query($con,"select * from student where studentid='$user'");
	while($row=mysqli_fetch_array($us)){
		$usern=$row['studentname'];
	}
}
	
	
  

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Attendence Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<!--------------------------------login modal ------------------------------->
  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="background-color:#3396ff;">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 class="modal-title" style="color:black; margin-left:150px;">Login Form</h3>
</div>
<div class="modal-body">
 <center>
 <form method="post" action="index.php" >
 <table >
 <tr><td>
                         <div class="form-group">
						
							  
								
							</div> </td>
							
							<td> </td></tr>
     
                    <tr> <td> <div class="form-group">
							
								
								  <input class="form-control" id="email" type="text" name="email" placeholder="Enter your id" required="required">
								
							  </div> </td>
      							  <td><div class="form-group">
								
								
								  <input class="form-control" id="password" type="password" name="password" placeholder="Enter password"required="required">
								
							  </div></td></tr>
                                
			  
      
    
    <tr ><td><div class="form-actions" >
							  <button type="submit"  name="login" class="btn btn-primary">Login</button>
							 <button   class="btn btn-link navbar-btn"style="color:red;" id="btn" data-target="#myModal" data-toggle="modal"> Create Account ?  </button>
							</div></td></tr>
							</table>
 
</form>
</center>
</div>

</div>

  </div>
  </div>
<!--------------------------------registration modal ------------------------------->

	  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="background-color:#3396ff;">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 class="modal-title" style="color:black; margin-left:150px;">Registration Form</h3>
</div>
<div class="modal-body">
 <center>
 <form method="post" action="index.php" >
 <table >
 <tr><td>
                         <div class="form-group">
						
							  
								
							</div> </td>
							
							<td> </td></tr>
     
                    <tr><td>       <div class="form-group">
							  
							  
								<input class="form-control" id="name" type="text" name="name" placeholder="Enter name" required="required">
							  
							</div> </td>
      							 <td> <div class="form-group">
								
								
								  <input class="form-control" id="fname" type="text" name="reg" placeholder="Enter registration no." required="required">
								
							  </div></td></tr>
                                 <tr><td> <div class="form-group">
								
								
								  <input class="form-control" id="mname" type="text" name="dept" placeholder="Enter department" required="required">
								
							  </div></td>
							  <td><div class="form-group">
							 
							  
								<select class="form-control" name="semester" >
								<option value="semester" id="semester">Enter Semester</option>
                                  <option value="1st" id="1st">1st</option>
                                  <option value="2nd" id="2nd">2nd</option>
                                  <option value="3rd" id="3rd">3rd</option>
                                  <option value="4th" id="4th">4th</option>
                                  <option value="5th" id="5th">5th</option>
                                  <option value="6th" id="6th">6th</option>
                                  <option value="7th" id="7th">7th</option>
                                  <option value="8th" id="8th">8th</option>
                                  </select>
							 
							</div></td>
       </tr>
 <tr><td> <div class="form-group">
								
								
								  <input class="form-control" id="contact" type="text" name="program" placeholder="Enter Program name"required="required">
								
							  </div> </td>
							  <td> <div class="form-group">
							 
							   <input class="form-control" id="password" type="text" name="batch" placeholder="Enter batch"required="required">
								
							 
							</div></td>
	    </tr>
		<tr><td>
		<div class="form-group">
								
								
								  <input class="form-control" id="contact" type="password" name="password" placeholder="Enter password" required="required">
								
							  </div>
		</td>
		
		<td><div class="form-group">
							 
							  
								<select class="form-control" name="session" >
								<option value="semester" id="semester">Enter session</option>
                                  <option value="Spring-2016" id="Spring-2016">Spring-2016</option>
                                  <option value="Fall-2016" id="Fall-2016">Fall-2016</option>
                                  <option value="Summer-2016" id="Summer-2016">Summer-2016</option>
                                  
                                  </select>
							 
							</div></td>
		
		</tr>
							  
     
    
    <tr><td><div class="form-actions">
							  <button type="submit" style="margin-left:200px;" name="registration" class="btn btn-primary">Submit</button>
							 
							</div></td></tr>
							</table>
 
</form>
</center>
</div>

</div>

  </div>
  </div>
  <!---================= end of registration form -==========================-->
	<header id="fh5co-header" role="banner" style="background-color: #3396ff ;    position:fixed; z-index:99;  height:100px;">
		<div class="container">
			<div class="header-inner">
				
				 <a  href="index.php"><img src="images/log.jpg" style="float:left;"
				 class="img-circle" width="150" height="80"alt="logo"></a>
				 <span><h1 style="font-size:20px; color:white; margin-top:30px; float:left;">
				<a  style="color:white;"href="index.php">Attendance management system</a></h1></span>
                
				 
				<nav role="navigation" style="margin-top:30px; ">
					<ul style="color:white;">
					
						<?php if (!isset($_SESSION['user'])){
							
							?>
						<li><a  style="color:white;" class="btn btn-link navbar-btn" id="btn" data-target="#myModal1" data-toggle="modal"> Signup</a>
</li>

<?php
						}else{
							
							?>
							<li><a  style="color:white;" href="logout.php"> Logout</a></li>
							<li><a  style="color:white;" href=""> <?php echo "$usern";?></a></li>
							<?php
						}
						?>
						<li><a  style="color:white;" href="services.php">View Attendence</a></li>
						
						
						
						
						<li><a   style="color:white;" href="contact.php">Contact</a></li>
						
					</ul>
				</nav>
			</div>
		</div>
	</header>
	
	