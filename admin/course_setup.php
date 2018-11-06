<?php
include("../include/admin_header.php"); 
?>
<?php


if(isset($_POST["csetup"]))
{
	$ccode=$_POST['ccode'];
  $cname=$_POST['cname'];
  $cdname=$_POST['cdname'];
  $csname=$_POST['csname'];
  $credit=$_POST['credit'];
  $registration=mysqli_query($con,"INSERT INTO coursetable(cserial,cid,cname,department,semester,credit) VALUES('','$ccode',
  ' $cname','$cdname','$csname','$credit')");
    
    if ($registration>0) 
    {
         echo "<script>alert('Congratulation ! added successfully !')</script>";
	    echo "<script>window.open ('course_setup.php','_self')</script>";
    }
    else
    {
       echo "<script>alert('0op ! error occured !')</script>";
		   echo "<script>window.open ('course_setup.php','_self')</script>";
    } 
    
    
   
   
}

?>
<?php
	if(isset($_POST['ceditsetup'])){
	
	$ccode=$_POST['ccode'];
  $cname=$_POST['cname'];
  $cdname=$_POST['cdname'];
  $csname=$_POST['csname'];
  $credit=$_POST['credit'];

       $registration=mysqli_query($con,"Update coursetable set cname='  $cname',department=' $cdname',
	   semester='$csname',credit='$credit' where cid=$ccode");
	 	
	 
	 if( $registration!=0){
		  echo "<script>alert('Congratulation ! edited successfully !')</script>";
	    echo "<script>window.open ('course_setup.php','_self')</script>";
	 }
	 else{
		 echo "<script>alert('Oops ! error occured !')</script>";
	    echo "<script>window.open ('course_setup.php','_self')</script>";
	 }
}

?>
		<?php 
			if(isset($_GET['delete'])){
				$id=$_GET['delete'];
				$sql=mysqli_query($con,"DELETE FROM `coursetable` WHERE cserial='$id'");
				if($sql!=0){
		 echo "<script>alert('Congratulation ! deleted successfully !')</script>";
	    echo "<script>window.open ('course_setup.php','_self')</script>";
	 }
	 else{
		 echo "<script>alert('Oops ! error occured !')</script>";
	    echo "<script>window.open ('course_setup.php','_self')</script>";
	 }
			}
			?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Course Setup</h4>
                              <a href="javascript:window.print()" class="btn btn-danger btn-xs" style="margin-left:900px; margin-top:-30px;">Print</a>
                            </div>
							<div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
						<?php
			  if(isset($_GET['edit'])){
				$id=$_GET['edit'];

$sql=mysqli_query($con,"select * from coursetable where cserial='$id'");
								while($row=mysqli_fetch_array($sql)){
									$id=$row['cserial'];
									$ccode=$row['cid'];
  $cdname=$row['department'];
  $csname=$row['semester'];
  $cname=$row['cname'];
  $credit=$row['credit'];
			?>
            <div class="alert alert-info">
               Edit  from here.
            </div>
             <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username"> Course Code</label>
			                        	<input type="text" name="ccode" placeholder="code..." 
										class="form-username form-control" id="form-username" value="<?php echo "$ccode";?>" />
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Course Name</label>
			                        	<input type="text" name="cname" placeholder="enter Course name..." 
										class="form-password form-control" id="form-password" value="<?php echo "$cname";?>">
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-password">Department </label>
			                        	<input type="text" name="cdname" placeholder="enter department name..." 
										class="form-password form-control" id="form-password" value="<?php echo "$cdname";?>">
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-password">Semester</label>
			                        	<input type="text" name="csname" placeholder="enter Semester..." 
										class="form-password form-control" id="form-password" value="<?php echo "$csname";?>">
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-password">Credit</label>
			                        	<input type="text" name="credit" placeholder="enter Credit..." 
										class="form-password form-control" id="form-password" value="<?php echo "$credit";?>">
			                        </div>
			                        <button type="submit" name="ceditsetup" class="btn">Edit!</button>
									
			                    </form>
		                    </div>
			<?php
								}
			  }
			   else{
			  
			?>
			
			<?php if(isset($_GET['add'])){
				
			?>
			<div class="alert alert-info">
               Add  from here.
            </div>
             <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username"> Course Code</label>
			                        	<input type="text" name="ccode" placeholder="code..." 
										class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Course Name</label>
			                        	<input type="text" name="cname" placeholder="enter Course name..." 
										class="form-password form-control" id="form-password">
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-password">Department </label>
			                        	<input type="text" name="cdname" placeholder="enter department name..." 
										class="form-password form-control" id="form-password">
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-password">Semester</label>
			                        	<input type="text" name="csname" placeholder="enter Semester..." 
										class="form-password form-control" id="form-password">
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-password">Credit</label>
			                        	<input type="text" name="credit" placeholder="enter Credit..." 
										class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" name="csetup" class="btn">Create!</button>
									
			                    </form>
		                    </div>
			<?php 
			  }
			   }
			  ?>
                        	
                           
                        </div>
                    </div>
                            <div class="content table-responsive table-full-width">
							
                                <table class="table table-hover table-striped">
                                    <thead>
										
                                        <th>Code</th>
                                    	<th>Course Name</th>
                                    	<th>Department Name</th>
                                    	<th>Semester Name</th>
                                    	<th>Credit</th>
                                    
                                    	<th>Actions</th>
                                    </thead>
                                    <tbody>
									<?php 
									$show_info=mysqli_query($con,"select * from coursetable ");
								while($row=mysqli_fetch_array($show_info)){
									$id=$row['cserial'];
									$ccode=$row['cid'];
  $cdname=$row['department'];
  $csname=$row['semester'];
  $cname=$row['cname'];
  $credit=$row['credit'];
								        
										
										/*  */
											?>
                                        <tr>
										     <td><?php echo "$ccode";?></td>
										     <td><?php echo "  $cname";?></td>
                                        	<td><?php echo "$cdname";?></td>
                                        	<td><?php echo "$csname";?></td>
                                        	<td><?php echo "$credit";?></td>
                                        	
                                        	
                                        	
                                        	<td>
											<td class="center">
											 
           
            <a class="btn btn-info" href="<?php echo "course_setup.php?edit=$id";?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="<?php echo "course_setup.php?delete=$id";?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
											
											
                                        </tr>
										<?php
										}
									
									?>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


               


                </div>
            </div>
        </div>

<?php include("../include/admin_footer.php"); ?>
