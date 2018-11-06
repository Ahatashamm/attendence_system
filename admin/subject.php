<?php 
include("../include/admin_header.php");
?>

<?php
	if(isset($_POST['setup'])){
	
	
  $cname=$_POST['name'];
  $cfname=$_POST['father'];
  $reg=$_POST['reg'];
  $batch=$_POST['batch'];
$dept=$_POST['dept'];
  $exam=$_POST['pname'];
  $date=$_POST['date'];
  
  
       $registration1=mysqli_query($con,"insert into  student values  ('','$cname','$cfname','$reg','$batch','$dept','$exam','$date')"); 
	   
	 	
	 
	 if( $registration1!=0){
		  echo "<script>alert('Congratulation ! added successfully !')</script>";
	    echo "<script>window.open ('student.php?add=add','_self')</script>";
	 }
	 else{
		 echo "<script>alert('Oops ! error occured !')</script>";
	    echo "<script>window.open ('student.php?add=add','_self')</script>";
	 }
}

?>

<?php

if(isset($_GET['delete'])){
	$id=$_GET['delete'];
	$delete=mysqli_query($con,"delete  from subject where subjectid='$id'");
	if($delete>0){
	 echo "<script>alert('Congratulation ! deleted successfully !')</script>";
	    echo "<script>window.open ('subject.php','_self')</script>";
}else{
	echo "<script>alert('Oops ! error occured !')</script>";
	    echo "<script>window.open ('subject.php','_self')</script>";
}
}
?>
<?php
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];
		
		$showdata=mysqli_query($con,"select * from subject where subjectid='$id'");
		while($res=mysqli_fetch_array($showdata)){
			
	
		?>
		<div class="alert alert-info">
               Edit  from here.
            </div>
		<div class="form-bottom" style="width:200px; margin-left:40px;">
		<table style="width:500px;">
			                    <form role="form" action="" method="post" class="login-form">
								<tr><td>
			                    	<input type="hidden" name="id" value="<?php echo "$res[subjectid]" ;?>" />
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password"> Name</label>
			                        	<input type="text" name="name" placeholder="enter  name..." 
										class="form-password form-control" id="form-password" value="<?php echo "$res[subjectname]";?>">
			                        </div></td>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Student Father Name </label>
			                        	<input type="text" name="father" placeholder="enter father name..." 
										class="form-password form-control" id="form-password" value="<?php echo "$res[subjectcode]";?>">
			                        </div></td></tr>
									<tr><td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Student ID </label>
			                        	<input type="text" name="reg" placeholder="enter teacher..." 
										class="form-password form-control" id="form-password" value="<?php echo "$res[teacher]";?>">
			                        </div></td>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Batch</label>
			                        	<input type="text" name="batch" placeholder="enter batch..." 
										class="form-password form-control" id="form-password" value="<?php echo "$res[departmentname]";?>">
			                        </div></td></tr>
									<tr><td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Program Name</label>
			                        	<input type="text" name="pname" placeholder="enter program..." 
										class="form-password form-control" id="form-password" value="<?php echo "$res[programname]";?>">
			                        </div></td>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Department Name </label>
			                        	<input type="text" name="dept" placeholder="dept name..." 
										class="form-password form-control" id="form-password" value="<?php echo "$res[semestername]";?>">
			                        </div></td>
									</tr>
									
									
								<tr>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Admit_Date</label>
			                        	<input type="text" name="date" placeholder="enter Date..." 
										class="form-password form-control" id="form-password" value="<?php echo "$res[entry_date]";?>">
			                        </div></td>
									<td>
			                        <button type="submit" name="editsetup" class="btn">Edit!</button>
									</td></tr>
			                    </form>
								</table>
		                    </div>
		<?php
		}
	}
	?>
	<?php
	if(isset($_POST['editsetup'])){
	
	$id=$_POST['id'];
  $cname=$_POST['name'];
  $cfname=$_POST['father'];
  $reg=$_POST['reg'];
  $batch=$_POST['batch'];
$dept=$_POST['dept'];
  $exam=$_POST['pname'];
  $date=$_POST['date'];
  
  
       $registration=mysqli_query($con,"Update subject set  subjectname='$cname', subjectcode='$cfname',teacher='$reg',
	   departmentname=' $batch',programname='$dept',
	  entry_date='$date'  where subjectid=$id");
	 	
	 
	 if( $registration!=0){
		  echo "<script>alert('Congratulation ! edited successfully !')</script>";
	    echo "<script>window.open ('subject.php','_self')</script>";
	 }
	 else{
		 echo "<script>alert('Oops ! error occured !')</script>";
	    echo "<script>window.open ('subject.php','_self')</script>";
	 }
}

?>

<!--------------- end of header------------------------------>

        <div class="content">
            <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                   <h4 class="title text-center" style="background-color:whitesmoke; ">Subject details</h4>
								   <a href="javascript:window.print()" class="btn btn-danger btn-xs" style="margin-left:900px; margin-top:-50px;">Print</a>
								   
			<div class="row">
								   <?php if(isset($_GET['add'])){
	?>
	<div class="alert alert-info">
               Edit  from here.
            </div>
		<div class="form-bottom" style="width:200px; margin-left:40px;">
		<table style="width:500px;">
			                    <form role="form" action="" method="post" class="login-form">
								<tr><td>
			                    	
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password"> Name</label>
			                        	<input type="text" name="name" placeholder="enter  name..." 
										class="form-password form-control" id="form-password" >
			                        </div></td>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Student Father Name </label>
			                        	<input type="text" name="father" placeholder="enter father name..." 
										class="form-password form-control" id="form-password" >
			                        </div></td></tr>
									<tr><td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Student ID </label>
			                        	<input type="text" name="reg" placeholder="enter student id..." 
										class="form-password form-control" id="form-password" >
			                        </div></td>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Batch</label>
			                        	<input type="text" name="batch" placeholder="enter batch..." 
										class="form-password form-control" id="form-password" >
			                        </div></td></tr>
									<tr><td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Program Name</label>
			                        	<input type="text" name="pname" placeholder="enter program..." 
										class="form-password form-control" id="form-password" >
			                        </div></td>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Department Name </label>
			                        	<input type="text" name="dept" placeholder="dept name..." 
										class="form-password form-control" id="form-password" >
			                        </div></td>
									</tr>
									
									
								<tr>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Admit_Date</label>
			                        	<input type="text" name="date" placeholder="enter Date..." 
										class="form-password form-control" id="form-password" >
			                        </div></td>
									<td>
			                        <button type="submit" style="margin-top:-10px;" class="btn btn-info" name="setup" class="btn">Add New!</button>
									</td></tr>
			                    </form>
								</table>
		                    </div>
							<?php
}
?>
								   
			</div>
								<form role="form" action="" method="post" class="login-form" style="margin-top:px;">
								<tr><td>
			                    	
			                        <div class="form-group" style="width:300px; margin-left:700px;">
			                        	<label class="sr-only" for="form-password"> Search</label>
			                        	<input type="text" name="result" placeholder="Search by id" 
										class="form-password form-control" id="form-password" />
			                        </div></td>
									</tr>
                    <p class="text-center " style=" margin-left:600px;">
                        <input type="submit" class="btn btn-primary" name="Search" value="Search"/>
						</p>
             
		
            </form>
			
                             
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
										<th>Serial No</th>
										
                                        <th>Name</th>
                                    	<th>Subject Code</th>
                                    	<th>Teacher</th>
                                    	<th>Department Name</th>
										<th>programname</th>
                                    	<th>Semester</th>
                                    	<th>Date</th>
                                    	
                                    	
										<th>Action</th>
                                    </thead>
                                    <tbody>
									<?php
									if(isset($_POST['dsearch'])){
										
										$term1=$_POST['departmentid'];
										$term2=$_POST['batchid'];
										$term3=$_POST['programid'];
										$searchquery=mysqli_query($con,"SELECT * FROM student WHERE (departmentname= '$term1'  AND batchname='$term2' AND
									programname='$term3')	");
										
										while($row=mysqli_fetch_array($searchquery)){
											$id=$row['serial_no'];	
											
											?>
											<tr>
										     <td><?php echo "$row[serial_no]";?></td>
											 <td><?php echo "$row[admit_date]";?></td>
										     <td><?php echo "$row[studentname]";?></td>
                                        	
                                        	<td><?php echo "$row[studentid]";?></td>
                                        	<td><?php echo "$row[departmentname]";?></td>
											<td><?php echo "$row[studentfathername]";?></td>
                                        	<td><?php echo "$row[batchname]";?></td>
                                        	<td><?php echo "$row[programname]";?></td>
                                        	
											
											
                                        	<td class="center">
											<?php //if($username=="Vice-Chancellor" ||  $username=="Register" || $username=="Accountant"){
												?>
												
           
            <a class="btn btn-info" href="<?php echo "student.php?edit=$id";?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="<?php echo "student.php?delete=$id";?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
			<?php
											//}else{
											//}
											?>
											
											
											
        </td>
											
                                        	
                                        	
                                        </tr>
										<?php
										}
										?>
										<?php
									}
								
									elseif(isset($_POST['Search'])){
										
										$term=$_POST['result'];
										$searchquery=mysqli_query($con,"SELECT * FROM student WHERE (studentid = '$term') ");
										
										while($row=mysqli_fetch_array($searchquery)){
											$id=$row['serial_no'];	
											
											?>
											<tr>
										     <td><?php echo "$row[serial_no]";?></td>
											 <td><?php echo "$row[admit_date]";?></td>
										     <td><?php echo "$row[studentname]";?></td>
                                        	
                                        	<td><?php echo "$row[studentid]";?></td>
                                        	<td><?php echo "$row[departmentname]";?></td>
											<td><?php echo "$row[studentfathername]";?></td>
                                        	<td><?php echo "$row[batchname]";?></td>
                                        	<td><?php echo "$row[programname]";?></td>
                                        	
											
											
                                        	<td class="center">
											<?php //if($username=="Vice-Chancellor" ||  $username=="Register" || $username=="Accountant"){
												?>
												
           
            <a class="btn btn-info" href="<?php echo "student.php?edit=$id";?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="<?php echo "student.php?delete=$id";?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
			<?php
											//}else{
											//}
											?>
											
											
											
        </td>
											
                                        	
                                        	
                                        </tr>
										<?php
										}
										?>
											<?php
									} 
									else {
									?>
									<?php 
									


$sql=mysqli_query($con,"select * from subject  ");
while($row=mysqli_fetch_array($sql)){
			$id=$row['subjectid'];							
										/*  */
											?>
                                        <tr>
										     <td><?php echo "$row[subjectid]";?></td>
											 <td><?php echo "$row[subjectname]";?></td>
										     <td><?php echo "$row[subjectcode]";?></td>
                                        	
                                        	<td><?php echo "$row[teacher]";?></td>
                                        	<td><?php echo "$row[departmentname]";?></td>
											<td><?php echo "$row[programname]";?></td>
											<td><?php echo "$row[semestername]";?></td>
                                        	<td><?php echo "$row[entry_date]";?></td>
                                        	
                                        	
											
											
                                        	<td class="center">
											<?php //if($username=="Vice-Chancellor" ||  $username=="Register" || $username=="Accountant"){
												?>
												
           
            <a class="btn btn-info" href="<?php echo "subject.php?edit=$id";?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="<?php echo "subject.php?delete=$id";?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
			<?php
											//}else{
											//}
											?>
											
											
											
        </td>
											
                                        	
                                        	
                                        </tr>
										<?php
										}
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

<!-----------footer----------------------->
<?php include("../include/admin_footer.php"); ?>
       