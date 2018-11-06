<?php
session_start();
include("../include/db_connect.php");
if($_SESSION['username']==0 && $_SESSION['admin_login_status']!="loged in"){
  // echo "<script>window.open('index.php','_self')</script>";
  header("Location:index.php");
}

	$username=$_SESSION['username'];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>University Student Attendence Management  System</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	<style type="text/css">
	@media print{
		.noprint{display:none;}
		
	}
	@media screen{}
</style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar"  data-color="azure" ">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper noprint">
            

            <ul class="nav" style="margin-top:50px;">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
				<?php if($username=="Vice-Chancellor" ||  $username=="Register"){
					?>
               <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							  <i class="pe-7s-news-paper"></i>
                                    Settings
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu" style="background-color: blue; margin-left:15px;">
                                
                                <li><a href="department.php">Department</a></li>
                                <li><a href="subjectt.php">Course</a></li>
                                <li><a href="program.php">Programm</a></li>
                                <li><a href="semester.php">Semester</a></li>
                                <li><a href="semester_category.php">Season</a></li>
                                
                              
                              </ul>
                        </li>
				<?php
				}else{ ?>
				     <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							  <i class="pe-7s-news-paper"></i>
                                    Settings
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu" style="background-color: blue; margin-left:15px;">
                                
                                <li><a href="department.php">Department</a></li>
                                <li><a href="subjectt.php">Course</a></li>
                                <li><a href="program.php">Programm</a></li>
                                <li><a href="semester.php">Semester</a></li>
                                <li><a href="semester_category.php">Season</a></li>
                                
                              
                              </ul>
                        </li>
				<?php
				} 
				?>
				<?php if($username=="Vice-Chancellor" ||  $username=="Register"){
					?>
               
				<li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							  <i class="pe-7s-news-paper"></i>
                                    DEPARTMENT SETUP
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu" style="background-color: blue; margin-left:15px;">
                                <li><a href="#">ADD NEW</a></li>
                                <li><a href="#">SHOW ALL / EDIT</a></li>
                                
                              
                              </ul>
                        </li>
				<?php
				}else{ ?>
				
				<li><a href="student.php"><i class="pe-7s-news-paper"></i>
                                    Student </a></li>
				<?php
				} 
				?>
                <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							  <i class="pe-7s-news-paper"></i>
                                    Attendence
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu" style="background-color: blue; margin-left:15px;">
                                <li><a href="<?php echo "attendance.php";?>">Add Attendence</a></li>
                                <li><a href="atdn.php">View Attendence for 1st semester</a></li>
                                <li><a href="atdn2.php">View Attendence for 2nd semester</a></li>
                                <li><a href="atdn3.php">View Attendence for 3rd semester</a></li>
                                <li><a href="atdn4.php">View Attendence for 4th semester</a></li>
                                <li><a href="atdn5.php">View Attendence for 5th semester</a></li>
                                <li><a href="atdn6.php">View Attendence for 6th semester</a></li>
                                <li><a href="atdn7.php">View Attendence for 7th semester</a></li>
                                <li><a href="atdn8.php">View Attendence for 8th semester</a></li>
                                
                              
                              </ul>
                        </li>
               
				 
               
			  
               
			    
               <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							  <i class="pe-7s-news-paper"></i>
                                    Teacher
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu" style="background-color: blue; margin-left:15px;">
                                <li><a href="teacher.php?add=add">ADD NEW</a></li>
                                <li><a href="assignteacher.php">Assign Teacher</a></li>
                                <li><a href="teacher.php">SHOW </a></li>
                                
                              
                              </ul>
                        </li>
               
               
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed" style="background-color: #04c8dc ; color:white;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="color:white;">Admin Panel</a>
                </div>
                <div class="collapse navbar-collapse">
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="" style="color:white;">
                               Account
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white;">
                                   <?php echo "$username";?>
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li>
                            <a href="logout.php" >
                                Log out
                            </a>
                        </li>
                              </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>