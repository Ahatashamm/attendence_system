<?php include("../include/admin_header.php"); ?>


<?php
	if(isset($_POST['setup'])){
	
	
  $name=$_POST['name'];
  $rank=$_POST['rank'];
  $degree=$_POST['degree'];
  $jd=$_POST['jd'];
$dept=$_POST['dept'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $address=$_POST['address'];
  
  $registration0=mysqli_query($con,"insert into  user values  ('','$name','1234','$rank','$name')"); 
	   
       $registration1=mysqli_query($con,"insert into  teacher values  ('','$name','$rank','$degree','$jd','$email','$dept','$contact','$address')"); 
	   
	 	
	 
	 if( $registration1!=0){
		  echo "<script>alert('Congratulation ! added successfully !')</script>";
	    echo "<script>window.open ('teacher.php?add=add','_self')</script>";
	 }
	 else{
		 echo "<script>alert('Oops ! error occured !')</script>";
	    echo "<script>window.open ('teacher.php?add=add','_self')</script>";
	 }
}

?>

<?php

if(isset($_GET['delete'])){
	$id=$_GET['delete'];
	$delete=mysqli_query($con,"delete  from teacher where serial_no='$id'");
	if($delete>0){
	 echo "<script>alert('Congratulation ! deleted successfully !')</script>";
	    echo "<script>window.open ('teacher.php','_self')</script>";
}else{
	echo "<script>alert('Oops ! error occured !')</script>";
	    echo "<script>window.open ('teacher.php','_self')</script>";
}
}
?>
<?php
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];
		
		$showdata=mysqli_query($con,"select * from teacher where serial_no='$id'");
		while($res=mysqli_fetch_array($showdata)){
			
	
		?>
		<div class="alert alert-info text-center" style="width:500px; margin-left:300px;margin-top:15px; border-radius:25px;">
               Edit  from here.
            </div>
  
 <center>
 <form method="post" action="" >
 <table class=" " >
 <tr class="warning"><td>
                         <div class="form-group">
						
							  <input class="form-control" id="name" type="hidden" name="id"  value="<?php echo "$res[serial_no]";?>">
							  
								
							</div> </td>
							
							<td> </td></tr>
     
                    <tr><td>       <div class="form-group">
							  
							  
								<input class="form-control" id="name" type="text" name="name"  value="<?php echo "$res[name]";?>">
							  
							</div> </td>
      							 <td> <div class="form-group">
								
								
								  <input class="form-control" id="fname" type="text" name="rank" value="<?php echo "$res[rank]";?>">
								
							  </div></td></tr>
                                 <tr><td> <div class="form-group">
								
								
								  <input class="form-control" id="mname" type="text" name="degree" value="<?php echo "$res[degree]";?> ">
								
							  </div></td>
							  <td> <div class="form-group">
								
								
								  <input class="form-control" id="contact" type="text" name="jd" value="<?php echo "$res[joint_date]";?> ">
								
							  </div> </td>
							  
       </tr>
 <tr>
							  <td> <div class="form-group">
							 
							   <input class="form-control" id="password" type="text" name="email" value="<?php echo "$res[email]";?> ">
								
							 
							</div></td>
							<td>
		<div class="form-group">
								
								
								  <input class="form-control" id="contact" type="text" name="dept" value="<?php echo "$res[faculty]";?> ">
								
							  </div>
		</td>
	    </tr>
		<tr>
		<td>
		<div class="form-group">
								
								
								  <input class="form-control" id="contact" type="text" name="contact" value="<?php echo "$res[contact]";?> ">
								
							  </div>
		</td>
		<td>
		<div class="form-group">
								
								
								  <input class="form-control" id="contact" type="text" name="address" value="<?php echo "$res[address]";?> ">
								
							  </div>
		</td>
		
		
		</tr>
							  
    
    
    <tr><td> <div class="alert alert-info" style="width:300px; margin-left:100px; border-radius:25px;">
              <button type="submit" style="margin-left:80px;" style="width:300px; border-radius:25px;" name="editsetup" class="btn btn-danger">Submit</button>
							 
            </div></td></tr>
							</table>
 
</form>
</center>

		<?php
		}
	}
	?>
	<?php
	if(isset($_POST['editsetup'])){
	
	$id=$_POST['id'];
  $name=$_POST['name'];
  $rank=$_POST['rank'];
  $degree=$_POST['degree'];
  $jd=$_POST['jd'];
$dept=$_POST['dept'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $address=$_POST['address'];
  
  
       $registration=mysqli_query($con,"Update teacher set   name='$name', rank='$rank',degree='$degree',
	   joint_date=' $jd',email='$email',faculty='$dept',contact='$contact',address='$address' where serial_no=$id");
	   
	 	
	 
	 if( $registration!=0){
		  echo "<script>alert('Congratulation ! edited successfully !')</script>";
	    echo "<script>window.open ('teacher.php','_self')</script>";
	 }
	 else{
		 echo "<script>alert('Oops ! error occured !')</script>";
	    echo "<script>window.open ('teacher.php','_self')</script>";
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
                                   <h4 class="title text-center" style="background-color:whitesmoke; ">Teacher's details</h4>
								   <a href="javascript:window.print()" class="btn btn-danger btn-xs" style="margin-left:900px; margin-top:-50px;">Print</a>
								   
			<div class="row">
								   <?php if(isset($_GET['add'])){
	?>
<div class="alert alert-info text-center" style="width:500px; margin-left:300px;margin-top:15px; border-radius:25px;">
               Add new teacher
            </div>
  
 <center>
 <form method="post" action="" >
 <table class=" " >
 <tr class="warning"><td>
                         <div class="form-group">
						
							  <input class="form-control" id="name" type="hidden" name="id"  value="<?php echo "$res[serial_no]";?>">
							  
								
							</div> </td>
							
							<td> </td></tr>
     
                    <tr><td>       <div class="form-group">
							  
							  
								<input class="form-control" id="name" type="text" name="name" placeholder="Enter Name" required="required">
							  
							</div> </td>
      							 <td> <div class="form-group">
								
								
								  <input class="form-control" id="fname" type="text" name="rank" placeholder="Enter Rank" required="required">
								
							  </div></td></tr>
                                 <tr><td> <div class="form-group">
								
								
								  <input class="form-control" id="mname" type="text" name="degree" placeholder="Enter Degree" required="required">
								
							  </div></td>
							  <td> <div class="form-group">
								
								
								  <input class="form-control" id="contact" type="text" name="jd" placeholder="Enter Joint_date" required="required">
								
							  </div> </td>
							  
       </tr>
 <tr>
							  <td> <div class="form-group">
							 
							   <input class="form-control" id="password" type="text" name="email" placeholder="Enter Email" required="required">
								
							 
							</div></td>
							<td>
		<div class="form-group">
								
								
								  <input class="form-control" id="contact" type="text" name="dept" placeholder="Enter Department" required="required">
								
							  </div>
		</td>
	    </tr>
		<tr>
		<td>
		<div class="form-group">
								
								
								  <input class="form-control" id="contact" type="text" name="contact" placeholder="Enter contact" required="required">
								
							  </div>
		</td>
		<td>
		<div class="form-group">
								
								
								  <input class="form-control" id="contact" type="text" name="address" placeholder="Enter Address" required="required">
								
							  </div>
		</td>
		
		
		</tr>
							  
    
    
    <tr><td> <div class="alert alert-info" style="width:300px; margin-left:100px; border-radius:25px;">
              <button type="submit" style="margin-left:80px;" style="width:300px; border-radius:25px;" name="setup" class="btn btn-danger">Submit</button>
							 
            </div></td></tr>
							</table>
 
</form>
</center>
							<?php
}
?>
								  
			</div>
								
			
                             
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
										<th>Serial No</th>
										<th>Name</th>
                                        <th>Rank</th>
                                    	<th>Degree</th>
                                    	<th>Joint_date</th>
                                    	<th>Email</th>
                                    	<th>Faculty</th>
                                    	<th>Contact</th>
                                    	<th>Addess</th>
                                    	
										<th>Action</th>
                                    </thead>
                                    <tbody>
									<?php
									if(isset($_POST['Search'])){
										
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
									


$sql=mysqli_query($con,"select * from teacher  ");
while($row=mysqli_fetch_array($sql)){
			$id=$row['serial_no'];							
										/*  */
											?>
                                        <tr>
										     <td><?php echo "$row[serial_no]";?></td>
											 <td><?php echo "$row[name]";?></td>
										     <td><?php echo "$row[rank]";?></td>
                                        	
                                        	<td><?php echo "$row[degree]";?></td>
                                        	<td><?php echo "$row[joint_date]";?></td>
											<td><?php echo "$row[email]";?></td>
                                        	<td><?php echo "$row[faculty]";?></td>
                                        	<td><?php echo "$row[contact]";?></td>
                                        	<td><?php echo "$row[address]";?></td>
                                        	
											
											
                                        	<td class="">
											<?php //if($username=="Vice-Chancellor" ||  $username=="Register" || $username=="Accountant"){
												?>
												
           
            <a class="btn btn-info btn-xs" href="<?php echo "teacher.php?edit=$id";?>">
                <i class="glyphicon glyphicon-edit "></i>
                Edit
            </a>
						
            <a class="btn btn-danger btn-xs" href="<?php echo "teacher.php?delete=$id";?>">
                <i class="glyphicon glyphicon-trash "></i>
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
       