<?php include("../include/admin_header.php"); ?>
<?php 
      if(isset($_POST['assign'])){

          $teacher=$_POST['teacher'];
		  $dept=$_POST['departmentid'];
		   $program=$_POST['programid'];
          $batch=$_POST['batchid'];
          $semester=$_POST['semester'];
         
          $course=$_POST['course'];
          
         $push=mysqli_query($con,"insert into subject values ('','$course','$teacher','$dept','$program','$semester','$batch','')");
         if($push>0){
			 echo "<script>alert('Successfully done')</script>";
			 echo "<script>window.open('assignteacher.php','_self')</script>";
			 
		 }
		 else{
			 echo "<script>alert('error occured')</script>";
			 echo "<script>window.open('assignteacher.php','_self')</script>";
			 
		 }
	  } 
            
		?>
		<?php
	if(isset($_POST['editsetup'])){
	
	$id=$_POST['id'];
  $name=$_POST['course'];
  $rank=$_POST['teacher'];
  $degree=$_POST['dept'];
  $jd=$_POST['program'];
$dept=$_POST['semester'];
  $email=$_POST['batch'];
  $contact=$_POST['class'];
  
  
  
       $registration=mysqli_query($con,"Update subject set   subjectname='$name', teacher='$rank',departmentname='$degree',
	   programname='$jd',semestername='$dept',batch='$email',taken_classes='$contact' where id=$id");
	   
	 	
	 
	 if( $registration!=0){
		  echo "<script>alert('Congratulation ! edited successfully !')</script>";
	    echo "<script>window.open ('assignteacher.php','_self')</script>";
	 }
	 else{
		 echo "<script>alert('Oops ! error occured !')</script>";
	    echo "<script>window.open ('assignteacher.php','_self')</script>";
	 }
}

?>
		<?php
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];
		
		$showdata=mysqli_query($con,"select * from subject where id='$id'");
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
						
							  <input class="form-control" id="name" type="hidden" name="id"  value="<?php echo "$res[id]";?>">
							  
								
							</div> </td>
							
							<td> </td></tr>
     
                    <tr><td>       <div class="form-group">
							  
							  
								
								<input class="form-control" id="name" type="text" name="course"  value="<?php echo "$res[subjectname]";?>">
							  
							</div> </td>
      							 <td> <div class="form-group">
								
								
								  <input class="form-control" id="fname" type="text" name="teacher" value="<?php echo "$res[teacher]";?>">
								
							  </div></td></tr>
                                 <tr><td> <div class="form-group">
								
								
								  <input class="form-control" id="mname" type="text" name="dept" value="<?php echo "$res[departmentname]";?> ">
								
							  </div></td>
							  <td> <div class="form-group">
								
								
								  <input class="form-control" id="contact" type="text" name="program" value="<?php echo "$res[programname]";?> ">
								
							  </div> </td>
							  
       </tr>
 <tr>
							  <td> <div class="form-group">
							 
							   <input class="form-control" id="password" type="text" name="semester" value="<?php echo "$res[semestername]";?> ">
								
							 
							</div></td>
							<td>
		<div class="form-group">
								
								
								  <input class="form-control" id="contact" type="text" name="batch" value="<?php echo "$res[batch]";?> ">
								
							  </div>
		</td>
	    </tr>
		<tr>
		<td>
		<div class="form-group">
								
								
								  <input class="form-control" id="contact" type="text" name="class" value="<?php echo "$res[taken_classes]";?> ">
								
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

if(isset($_GET['delete'])){
	$id=$_GET['delete'];
	$delete=mysqli_query($con,"delete  from subject where id='$id'");
	if($delete>0){
	 echo "<script>alert('Congratulation ! deleted successfully !')</script>";
	    echo "<script>window.open ('assignteacher.php','_self')</script>";
}else{
	echo "<script>alert('Oops ! error occured !')</script>";
	    echo "<script>window.open ('assignteacher.php','_self')</script>";
}
}
?>
<!--=========================main content-======================-->
 
      <div class="container" style="margin-top:30px; width:1050px;">
<form action="" method="post">
       <div class="row">
              <h3 class="alert bg-primary text-center">Assign Teacher</h3>
              <div class="col-sm-2">Select Teacher</div>
              
              <div class="col-sm-2">Select Department</div>
              <div class="col-sm-2">Select Program</div>
              <div class="col-sm-2">Select Batch</div>
              <div class="col-sm-2">Select Semester</div>
              <div class="col-sm-2">Select Course</div>
              
       </div>
       <div class="row">
              <div class="col-sm-2">
                     <select class="form-control" name="teacher">

                            <?php $result_pro=mysqli_query($con,"select DISTINCT `name` from teacher");
    $row_pro=mysqli_fetch_array($result_pro); 
    do
    {
        echo '<option value="'.$row_pro['name'].'">'.$row_pro['name'].'</option>';

    }while ($row_pro=mysqli_fetch_array($result_pro)); ?>

                     </select>
              </div>
			  
              <div class="col-sm-2">
                     <select class="form-control" name="departmentid">

                            <?php  $result_th=mysqli_query($con,"select DISTINCT `departmentname` from department");
    $row_th=mysqli_fetch_array($result_th); 
    do
    {
        echo '<option value="'.$row_th['departmentname'].'">'.$row_th['departmentname'].'</option>';

    }while ($row_th=mysqli_fetch_array($result_th)); ?>

                     </select>
              </div>
              <div class="col-sm-2">
                     <select class="form-control" name="programid">

                            <?php  $result_pro=mysqli_query($con,"select * from program");
    $row_pro=mysqli_fetch_array($result_pro); 
    do
    {
        echo '<option value="'.$row_pro['programtitle'].'">'.$row_pro['programtitle'].'</option>';

    }while ($row_pro=mysqli_fetch_array($result_pro)); ?>

                     </select>
              </div>
              <div class="col-sm-2">
                     <select class="form-control" name="batchid">

                            <?php $result_bch=mysqli_query($con,"select DISTINCT `batchname` from student");
    $row_bch=mysqli_fetch_array($result_bch); 
    do
    {
        echo '<option value="'.$row_bch['batchname'].'">'.$row_bch['batchname'].'</option>';

    }while ($row_bch=mysqli_fetch_array($result_bch)); ?>

                     </select>
              </div>
			  <div class="col-sm-2">
                     <select class="form-control" name="semester">

                            <?php $result_bch=mysqli_query($con,"select * from semester");
    $row_bch=mysqli_fetch_array($result_bch); 
    do
    {
        echo '<option value="'.$row_bch['semestertitle'].'">'.$row_bch['semestertitle'].'</option>';

    }while ($row_bch=mysqli_fetch_array($result_bch)); ?>

                     </select>
              </div><div class="col-sm-2">
                     <select class="form-control" name="course">

                            <?php $result_bch=mysqli_query($con,"select * from subject_configure");
    $row_bch=mysqli_fetch_array($result_bch); 
    do
    {
        echo '<option value="'.$row_bch['course'].'">'.$row_bch['course'].'</option>';

    }while ($row_bch=mysqli_fetch_array($result_bch)); ?>

                     </select>
              </div>
              
              
       </div>
       <div class="row" style="margin-top:30px;">
              <div class="col-sm-3">
              </div>
              
              
              
              <div class="col-sm-2">
              <input class="btn btn-primary form-control" name="assign" value="Assign" type="submit">
              </div>
            
              </div>
              </form>
			  	 <div class="content ">
                                <table class="table table-hover ">
                                    <thead>
										<th>Serial No</th>
										<th>Course</th>
										<th>Teacher Name</th>
                                       
                                    	<th>Department</th>
                                    	<th>Program</th>
                                    	<th>Semester</th>
                                    	<th>Batch</th>
										<th>Action</th>
                                    </thead>
                                    <tbody>
									<?php
									
								
									if(isset($_POST['Search'])){
										
										$term=$_POST['result'];
										$searchquery=mysqli_query($con,"SELECT * FROM add_teachers WHERE (name = '$term') ");
										
										while($row=mysqli_fetch_array($searchquery)){
											$id=$row['id'];	
											
											?>
											<tr>
										     <td><?php echo "$row[id]";?></td>
											 <td><?php echo "$row[name]";?></td>
										     <td><?php echo "$row[designation]";?></td>
                                        	
                                        	<td><?php echo "$row[department]";?></td>
                                        	<td><?php echo "$row[semester]";?></td>
											<td><?php echo "$row[course]";?></td>
                                        	
                                        	
											
											
                                        	<td class="center">
											<?php //if($username=="Vice-Chancellor" ||  $username=="Register" || $username=="Accountant"){
												?>
												
           
            <a class="btn btn-info" href="<?php echo "assignteacher.php?edit=$id";?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="<?php echo "assignteacher.php?delete=$id";?>">
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
									


$sql=mysqli_query($con,"select * from subject order by id DESC ");
while($row=mysqli_fetch_array($sql)){
			$id=$row['id'];							
										/*  */
											?>
                                        <tr>
										     <td><?php echo "$row[id]";?></td>
											 <td><?php echo "$row[subjectname]";?></td>
											 <td><?php echo "$row[teacher]";?></td>
										    <td><?php echo "$row[departmentname]";?></td>
											 <td><?php echo "$row[programname]";?></td>
                                        	<td><?php echo "$row[semestername]";?></td>
                                        	<td><?php echo "$row[batch]";?></td>
											
                                        	
											
											
                                        	<td >
											<?php //if($username=="Vice-Chancellor" ||  $username=="Register" || $username=="Accountant"){
												?>
												
           
            <a class="btn btn-info btn-xs" href="<?php echo "assignteacher.php?edit=$id";?>">
                <i class="glyphicon glyphicon-edit "></i>
                Edit
            </a>
            <a class="btn btn-danger btn-xs" href="<?php echo "assignteacher.php?delete=$id";?>">
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
<!--=========================end of main content-======================-->
	<!-----------footer----------------------->
<?php include("../include/admin_footer.php"); ?>
    