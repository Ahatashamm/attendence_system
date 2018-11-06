<?php include("../include/admin_header.php"); ?>


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
	$delete=mysqli_query($con,"delete  from student where serial_no='$id'");
	if($delete>0){
	 echo "<script>alert('Congratulation ! deleted successfully !')</script>";
	    echo "<script>window.open ('student.php','_self')</script>";
}else{
	echo "<script>alert('Oops ! error occured !')</script>";
	    echo "<script>window.open ('student.php','_self')</script>";
}
}
?>
<?php
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];
		
		$showdata=mysqli_query($con,"select * from student where serial_no='$id'");
		while($res=mysqli_fetch_array($showdata)){
			
	
		?>
		<div class="alert alert-info text-center" style="width:500px; margin-left:300px;margin-top:15px; border-radius:25px;">
               Edit  from here.
            </div>
		<div class="form-bottom" style="width:200px; margin-left:300px;">
		<table style="width:600px;">
		<center>
			                    <form role="form" action="" method="post" class="login-form">
								<tr><td>
			                    	<input type="hidden" name="id" value="<?php echo "$res[serial_no]" ;?>" />
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password"> Name</label>
			                        	<input type="text" name="name" placeholder="enter  name..." 
										class="form-password form-control" id="form-password" value="<?php echo "$res[studentname]";?>">
			                        </div></td>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Student ID </label>
			                        	<input type="text" name="studentid" placeholder="enter father name..." 
										class="form-password form-control" id="form-password" value="<?php echo "$res[studentid]";?>">
			                        </div></td></tr>
									<tr>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Department Name </label>
			                        	<input type="text" name="dept" placeholder="dept name..." 
										class="form-password form-control" id="form-password" value="<?php echo "$res[departmentname]";?>">
			                        </div></td>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Semester</label>
			                        	<input type="text" name="semester" placeholder="enter batch..." 
										class="form-password form-control" id="form-password" value="<?php echo "$res[semester]";?>">
			                        </div></td></tr>
									<tr>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Batch</label>
			                        	<input type="text" name="batch" placeholder="enter batch..." 
										class="form-password form-control" id="form-password" value="<?php echo "$res[batchname]";?>">
			                        </div></td>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Program Name</label>
			                        	<input type="text" name="pname" placeholder="enter program..." 
										class="form-password form-control" id="form-password" value="<?php echo "$res[programname]";?>">
			                        </div></td>
									
									</tr>
									
									
								<tr>
								<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Session</label>
			                        	<input type="text" name="session" placeholder="enter Date..." 
										class="form-password form-control" id="form-password" value="<?php echo "$res[session]";?>">
			                        </div></td>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Admit_Date</label>
			                        	<input type="text" name="date" placeholder="enter Date..." 
										class="form-password form-control" id="form-password" value="<?php echo "$res[admit_date]";?>">
			                        </div></td>
									</tr>
									 <tr><td> <div class="alert alert-info" style="width:300px; margin-left:100px; border-radius:25px;">
              <button type="submit" style="margin-left:80px;" style="width:300px; border-radius:25px;" name="editsetup" class="btn btn-danger">Submit</button>
							 
            </div></td></tr>
			                    </form>
								</center>
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
  $cfname=$_POST['studentid'];
  $dept=$_POST['dept'];
  $semester=$_POST['semester'];
  $batch=$_POST['batch'];

  $exam=$_POST['pname'];
  $session=$_POST['session'];
  $date=$_POST['date'];
  
  
       $registration=mysqli_query($con,"Update student set   studentname='$cname', studentid='$cfname',
	   departmentname=' $dept', semester='$semester',batchname='$batch',programname='$exam',session='$session',
	   admit_date='$date'  where serial_no=$id");
	 	
	 
	 if( $registration!=0){
		  echo "<script>alert('Congratulation ! edited successfully !')</script>";
	    echo "<script>window.open ('student.php','_self')</script>";
	 }
	 else{
		 echo "<script>alert('Oops ! error occured !')</script>";
	    echo "<script>window.open ('student.php','_self')</script>";
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
                                   <h4 class="title text-center" style="background-color:whitesmoke; ">Student details</h4>
								   
			<div class="row">
								   <?php if(isset($_GET['add'])){
	?>
	
		<div class="alert alert-info text-center" style="width:500px; margin-left:300px;margin-top:15px; border-radius:25px;">
               Add new student
            </div>
		<div class="form-bottom" style="width:200px; margin-left:300px;">
		<table style="width:600px;">
		<center>
			                    <form role="form" action="" method="post" class="login-form">
								<tr><td>
			                    	
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password"> Name</label>
			                        	<input type="text" name="name" placeholder="enter  name..." 
										class="form-password form-control" id="form-password" >
			                        </div></td>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Student ID </label>
			                        	<input type="text" name="studentid" placeholder="enter student id..." 
										class="form-password form-control" id="form-password" >
			                        </div></td></tr>
									<tr>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Department Name </label>
			                        	<input type="text" name="dept" placeholder="dept name..." 
										class="form-password form-control" id="form-password" >
			                        </div></td>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Semester</label>
			                        	<input type="text" name="semester" placeholder="enter semester..." 
										class="form-password form-control" id="form-password" >
			                        </div></td></tr>
									<tr>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Batch</label>
			                        	<input type="text" name="batch" placeholder="enter batch..." 
										class="form-password form-control" id="form-password" >
			                        </div></td>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Program Name</label>
			                        	<input type="text" name="pname" placeholder="enter program..." 
										class="form-password form-control" id="form-password" >
			                        </div></td>
									
									</tr>
									
									
								<tr>
								<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Session</label>
			                        	<input type="text" name="session" placeholder="enter session..." 
										class="form-password form-control" id="form-password" >
			                        </div></td>
									<td><div class="form-group">
			                        	<label class="sr-only" for="form-password">Admit_Date</label>
			                        	<input type="text" name="date" placeholder="enter Date..." 
										class="form-password form-control" id="form-password" >
			                        </div></td>
									</tr>
									 <tr><td> <div class="alert alert-info" style="width:300px; margin-left:100px; border-radius:25px;">
              <button type="submit" style="margin-left:80px;" style="width:300px; border-radius:25px;" name="setup" class="btn btn-danger">Submit</button>
							 
            </div></td></tr>
			                    </form>
								</center>
								</table>
		                    </div>
							<?php
}
?>
								   <form role="form" action="" method="post" class="login-form" style="width:600px;margin-top:20px; margin-left:px;">
								<div class="col-md-4">
			                    	
			                        <div class="form-group" >
			                        	<label class="sr-only" for="form-password"> Dept</label>
			                        	<select class="form-control" name="departmentid">
	              <?php  $result_th=mysqli_query($con,"select * from department");
    $row_th=mysqli_fetch_array($result_th); 
    do
    {
        echo '<option value="'.$row_th['departmentname'].'">'.$row_th['departmentname'].'</option>';

    }while ($row_th=mysqli_fetch_array($result_th)); ?>
	              </select>
			                        </div>
			                        </div>
			                    	<div class="col-md-4">
			                        <div class="form-group" >
			                        	<label class="sr-only" for="form-password">Batch</label>
			                        	<select class="form-control" name="batchid">
	              <?php $result_bch=mysqli_query($con,"select * from batch");
    $row_bch=mysqli_fetch_array($result_bch); 
    do
    {
        echo '<option value="'.$row_bch['batchtitle'].'">'.$row_bch['batchtitle'].'</option>';

    }while ($row_bch=mysqli_fetch_array($result_bch)); ?>
	              </select>
			                        </div>
			                        </div>
									<div class="col-md-4">
			                        <div class="form-group" >
			                        	<label class="sr-only" for="form-password"> Program</label>
			                        	<select class="form-control" name="programid">
	              <?php  $result_pro=mysqli_query($con,"select * from program");
    $row_pro=mysqli_fetch_array($result_pro); 
    do
    {
        echo '<option value="'.$row_pro['programtitle'].'">'.$row_pro['programtitle'].'</option>';

    }while ($row_pro=mysqli_fetch_array($result_pro)); ?>
	              </select>
			                        </div>
			                        </div>
                    <p class="text-center " >
                        <input type="submit" class="btn btn-primary" name="dsearch" value="Search"/>
						</p>
             
		
            </form>
		
			</div>
								<form role="form" action="" method="post" class="login-form" style="margin-top:-100px;">
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
										
                                        <th>StudentName</th>
                                    	<th>Studentid</th>
                                    	<th>Department Name</th>
                                    	<th>Semester</th>
                                    	<th>batchname</th>
                                    	<th>programname</th>
                                    	<th>Session</th>
                                    	<th>Admit Date</th>
                                    	
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
											 
										     <td><?php echo "$row[studentname]";?></td>
                                        	
                                        	<td><?php echo "$row[studentid]";?></td>
                                        	<td><?php echo "$row[departmentname]";?></td>
                                        	<td><?php echo "$row[semester]";?></td>
											
                                        	<td><?php echo "$row[batchname]";?></td>
                                        	<td><?php echo "$row[programname]";?></td>
                                        	<td><?php echo "$row[session]";?></td>
                                        	<td><?php echo "$row[admit_date]";?></td>
                                        	
											
											
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
										$searchquery=mysqli_query($con,"SELECT * FROM student WHERE (studentid = '$term' || studentname='$term' || batchname='$term') ");
										
										while($row=mysqli_fetch_array($searchquery)){
											$id=$row['serial_no'];	
											
											?>
											<tr>
										     <td><?php echo "$row[serial_no]";?></td>
											
										     <td><?php echo "$row[studentname]";?></td>
                                        	
                                        	<td><?php echo "$row[studentid]";?></td>
                                        	<td><?php echo "$row[departmentname]";?></td>
											<td><?php echo "$row[semester]";?></td>
                                        	<td><?php echo "$row[batchname]";?></td>
                                        	<td><?php echo "$row[programname]";?></td>
                                        	<td><?php echo "$row[session]";?></td>
                                        	 <td><?php echo "$row[admit_date]";?></td>
											
											
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
									


$sql=mysqli_query($con,"select * from student  ");
while($row=mysqli_fetch_array($sql)){
			$id=$row['serial_no'];							
										/*  */
											?>
                                        <tr>
										     <td><?php echo "$row[serial_no]";?></td>
											 <td><?php echo "$row[studentname]";?></td>
										     <td><?php echo "$row[studentid]";?></td>
                                        	
                                        	
                                        	<td><?php echo "$row[departmentname]";?></td>
											<td><?php echo "$row[semester]";?></td>
                                        	<td><?php echo "$row[batchname]";?></td>
                                        	<td><?php echo "$row[programname]";?></td>
                                        	<td><?php echo "$row[session]";?></td>
                                        	<td><?php echo "$row[admit_date]";?></td>
                                        	
											
											
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
       