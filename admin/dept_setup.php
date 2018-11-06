<?php
include("../include/admin_header.php"); 
?>
<?php


if(isset($_POST["dsetup"]))
{
	$deptid=$_POST['deptcode'];
  $deptname=$_POST['deptname'];
    $registration=mysqli_query($con,"INSERT INTO department(did,dname,date) VALUES('$deptid','$deptname',now())");
    
    if ($registration>0) 
    {
       echo "<script>alert('Congratulation ! new department created successfully !')</script>";
	    echo "<script>window.open ('dept_setup.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('Congratulation ! new department created successfully !')</script>";
		   echo "<script>window.open ('dept_setup.php','_self')</script>";
    } 
}

?>
<?php
	if(isset($_POST['editsetup'])){
	
	$id=$_POST['editcode'];
	$name=$_POST['editname'];

        
	 	
	 $sql=mysqli_query($con,"UPDATE department SET  `date`=now(), `dname`='$name' where did='$id'" );
	 
	 if($sql!=0){
		  echo "<script>alert('Congratulation ! edited successfully !')</script>";
	    echo "<script>window.open ('dept_setup.php','_self')</script>";
	 }
	 else{
		 echo "<script>alert('Oops ! error occured !')</script>";
	    echo "<script>window.open ('dept_setup.php','_self')</script>";
	 }
}

?>
		<?php 
			if(isset($_GET['delete'])){
				$id=$_GET['delete'];
				$sql=mysqli_query($con,"DELETE FROM `department` WHERE dserial='$id'");
				if($sql!=0){
		 echo "<script>alert('Congratulation ! deleted successfully !')</script>";
	    echo "<script>window.open ('dept_setup.php','_self')</script>";
	 }
	 else{
		 echo "<script>alert('Oops ! error occured !')</script>";
	    echo "<script>window.open ('dept_setup.php','_self')</script>";
	 }
			}
			?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Department Setup</h4>
                              <a href="javascript:window.print()" class="btn btn-danger btn-xs" style="margin-left:900px; margin-top:-30px;">Print</a>
                            </div>
							<div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
						<?php
			  if(isset($_GET['edit'])){
				$id=$_GET['edit'];

$sql=mysqli_query($con,"select * from department where dserial='$id'");
								while($row=mysqli_fetch_array($sql)){
									$id=$row['did'];
									$name=$row['dname'];
									$date=$row['date'];
			?>
            <div class="alert alert-info">
               Edit  from here.
            </div>
             <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Enter Code</label>
			                        	<input type="text" name="editcode" placeholder="code..." 
										class="form-username form-control" id="form-username" value="<?php echo "$id";?>" />
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Department Name</label>
			                        	<input type="text" name="editname" placeholder="enter department name..." 
										class="form-password form-control" id="form-password" value="<?php echo "$name";?>" />
			                        </div>
			                        <button type="submit" name="editsetup" class="btn">Edit!</button>
									
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
			                    		<label class="sr-only" for="form-username">Enter Code</label>
			                        	<input type="text" name="deptcode" placeholder="code..." 
										class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Department Name</label>
			                        	<input type="text" name="deptname" placeholder="enter department name..." 
										class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" name="dsetup" class="btn">Create!</button>
									
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
										<th>Date</th>
                                        <th>Code</th>
                                    	<th>Department Name</th>
                                    
                                    	<th>Actions</th>
                                    </thead>
                                    <tbody>
									<?php 
									$show_info=mysqli_query($con,"select * from department");
									while($result=mysqli_fetch_array($show_info)){
										$id=$result['dserial'];
										$name=$result['dname'];
										$did=$result['did'];
										$date=$result['date'];
								        
										
										/*  */
											?>
                                        <tr>
										     <td><?php echo "$date";?></td>
										     <td><?php echo "$did";?></td>
                                        	<td><?php echo "$name";?></td>
                                        	
                                        	
                                        	
                                        	<td>
											<td class="center">
           
            <a class="btn btn-info" href="<?php echo "dept_setup.php?edit=$id";?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="<?php echo "dept_setup.php?delete=$id";?>">
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
