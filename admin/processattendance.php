<?php include("../include/admin_header.php"); ?>
    <div class="container">
	
    <?php 
      if(isset($_POST['addreport'])){

          $batchid=$_POST['batchid'];
          $subjectid=$_POST['subjectcode'];
          $dept=$_POST['departmentid'];
          $programid=$_POST['programid'];
          $semester=$_POST['semester'];
          $session=$_POST['session'];
          $todate=$_POST['txtdate'];
          $attend=0;
          if($todate=="")
          {
              echo "Please check your input box";
          }
          else
		  {
			  /* $insertinfo=mysqli_query($con,"insert into attendence values ('','$username','','$dept','$semester','$subjectid','$batchid','$session','','$todate')");
		  if($insertinfo>0){ */
          
           ?>


              <div class="row" style="margin-top:30px;">
              <table class="table table-bordered text-center" style="width:700px; margin:0 auto;">
              
              <tbody>
              <tr>
                  <?php

                    /* $result_single_subject=mysqli_query($con,"select subjectname from subject where subjectcode='$subjectid'");
                    $row_single_subject=mysqli_fetch_array($result_single_subject); 
                    //echo */ 
                  ?>
				   <form action="" method="post">
                <td><input name="txtsub" class="form-control" value="<?php echo "$username";?>" type="text" ></td>
                <td><input  name="date" class="form-control" value="<?php echo "$todate ";?>" type="text" ></td>
                <td><input  name="semester" class="form-control" value="<?php echo "$semester ";?>" type="text" ></td>
              </tr>
              <tr>
                <td><input  name="batch" class="form-control" value="<?php echo "$batchid ";?>" type="text" ></td>
                <td><input  name="dept" class="form-control" value="<?php echo "$dept ";?>" type="text" ></td>
                <td><input  name="program" class="form-control" value="<?php echo "$programid ";?>" type="text" ></td>
                <input  name="session" class="form-control" value="<?php echo "$session ";?>" type="hidden" >
                <input  name="subject" class="form-control" value="<?php echo "$subjectid ";?>" type="hidden" >
              </tr>
              <tr class="bg-primary">
                <td>Student ID</td>
                <td>Student Name</td>
                <td>Attended Classes</td>
              </tr>
             
              <?php
			   $result_stdn=mysqli_query($con,"select * from student where departmentname='$dept' and batchname='$batchid'
			   and programname='$programid' and semester='$semester'");
            $userCount = mysqli_num_rows($result_stdn);
            if ($userCount>0) 
            {
				while($show=mysqli_fetch_array($result_stdn)){
				
             
            ?>
              
             
			  <tr>
                <td><?php echo "$show[studentid]";?></td>
                <td><?php echo "$show[studentname]";?></td>
                
                <td>
                  
				  <input type="checkbox" name="check_name[]" value="<?php echo "$show[studentid]";?>"   />
				  
				<input type="hidden" name="check_list[]" value="<?php echo "$show[studentname]";?>"   /></td>
				
				  </tr>
				   <?php
            }
			}
			?>
				
              <tr>
              <td colspan="3">
              <input class="btn btn-primary" name="submitreport" value="Submit Report" type="submit">
              </td>
              </tr>
              </form>
              
              </tbody></table></div>

           <?php
              
          
		  }
		  }
        
	  ?>
 
 <?php
	if(isset($_POST['submitreport'])){
		
		$date=$_POST['date'];
		$semester=$_POST['semester'];
		$batch=$_POST['batch'];
		$dept=$_POST['dept'];
		$subject=$_POST['subject'];
		$session=$_POST['session'];
		$program=$_POST['program'];
		$fs=mysqli_query($con,"select * from subject where semestername='$semester'");
		$row=mysqli_fetch_array($fs);
		$row['semestername'];
		echo $row['semestername'];
	if($row['semestername']=="1st"){
		$sc=mysqli_query($con,"select * from subject where subjectname='$subject'");
		while($r=mysqli_fetch_array($sc)) {
			$a=$r['taken_classes'];
			$iv=$a+1;
			echo "$iv";
			$updt=mysqli_query($con,"update subject set taken_classes='$iv' where teacher='$username'");
		}
		foreach($_POST["check_name"] as $name){
			
		$insert=mysqli_query($con,"insert into  attendence values ('','$username','','$name','$dept','$semester','$subject','$batch','$session','','$date') "); 
			foreach($_POST["check_name"] as $name){
			
			$up=mysqli_query($con,"update attendence set active='1' where studentid='$name'");
			
		}
		}
		
		if($up>0){
			echo "<script>alert('Attendence taken successfully !')</script>";
			echo "<script>window.open('attendance.php','_self')</script>";
		}
	} elseif($row['semestername']=="2nd"){
		
		$sc=mysqli_query($con,"select * from subject where subjectname='$subject'");
		while($r=mysqli_fetch_array($sc)) {
			$a=$r['taken_classes'];
			$iv=$a+1;
			echo "$iv";
			$updt=mysqli_query($con,"update subject set taken_classes='$iv' where teacher='$username'");
		}
		foreach($_POST["check_name"] as $name){
			
		$insert=mysqli_query($con,"insert into  attendence02 values ('','$username','','$name','$dept','$semester','$subject','$batch','$session','','$date') "); 
			foreach($_POST["check_name"] as $name){
			
			$up=mysqli_query($con,"update attendence02 set active='1' where studentid='$name'");
			
		}
		}
		
		if($up>0){
			echo "<script>alert('Attendence taken successfully !')</script>";
			echo "<script>window.open('attendance.php','_self')</script>";
		}
	
	}
	elseif($row['semestername']=="3rd"){
		
		$sc=mysqli_query($con,"select * from subject where subjectname='$subject'");
		while($r=mysqli_fetch_array($sc)) {
			$a=$r['taken_classes'];
			$iv=$a+1;
			echo "$iv";
			$updt=mysqli_query($con,"update subject set taken_classes='$iv' where teacher='$username'");
		}
		foreach($_POST["check_name"] as $name){
			
		$insert=mysqli_query($con,"insert into  attendence03 values ('','$username','','$name','$dept','$semester','$subject','$batch','$session','','$date') "); 
			foreach($_POST["check_name"] as $name){
			
			$up=mysqli_query($con,"update attendence03 set active='1' where studentid='$name'");
			
		}
		}
		
		if($up>0){
			echo "<script>alert('Attendence taken successfully !')</script>";
			echo "<script>window.open('attendance.php','_self')</script>";
		}
	
	}
	elseif($row['semestername']=="4th"){
		
		$sc=mysqli_query($con,"select * from subject where subjectname='$subject'");
		while($r=mysqli_fetch_array($sc)) {
			$a=$r['taken_classes'];
			$iv=$a+1;
			echo "$iv";
			$updt=mysqli_query($con,"update subject set taken_classes='$iv' where teacher='$username'");
		}
		foreach($_POST["check_name"] as $name){
			
		$insert=mysqli_query($con,"insert into  attendence04 values ('','$username','','$name','$dept','$semester','$subject','$batch','$session','','$date') "); 
			foreach($_POST["check_name"] as $name){
			
			$up=mysqli_query($con,"update attendence04 set active='1' where studentid='$name'");
			
		}
		}
		
		if($up>0){
			echo "<script>alert('Attendence taken successfully !')</script>";
			echo "<script>window.open('attendance.php','_self')</script>";
		}
	
	}
	elseif($row['semestername']=="5th"){
		
		$sc=mysqli_query($con,"select * from subject where subjectname='$subject'");
		while($r=mysqli_fetch_array($sc)) {
			$a=$r['taken_classes'];
			$iv=$a+1;
			echo "$iv";
			$updt=mysqli_query($con,"update subject set taken_classes='$iv' where teacher='$username'");
		}
		foreach($_POST["check_name"] as $name){
			
		$insert=mysqli_query($con,"insert into  attendence05 values ('','$username','','$name','$dept','$semester','$subject','$batch','$session','','$date') "); 
			foreach($_POST["check_name"] as $name){
			
			$up=mysqli_query($con,"update attendence05 set active='1' where studentid='$name'");
			
		}
		}
		
		if($up>0){
			echo "<script>alert('Attendence taken successfully !')</script>";
			echo "<script>window.open('attendance.php','_self')</script>";
		}
	
	}
	elseif($row['semestername']=="6th"){
		
		$sc=mysqli_query($con,"select * from subject where subjectname='$subject'");
		while($r=mysqli_fetch_array($sc)) {
			$a=$r['taken_classes'];
			$iv=$a+1;
			echo "$iv";
			$updt=mysqli_query($con,"update subject set taken_classes='$iv' where teacher='$username'");
		}
		foreach($_POST["check_name"] as $name){
			
		$insert=mysqli_query($con,"insert into  attendence06 values ('','$username','','$name','$dept','$semester','$subject','$batch','$session','','$date') "); 
			foreach($_POST["check_name"] as $name){
			
			$up=mysqli_query($con,"update attendence06 set active='1' where studentid='$name'");
			
		}
		}
		
		if($up>0){
			echo "<script>alert('Attendence taken successfully !')</script>";
			echo "<script>window.open('attendance.php','_self')</script>";
		}
	
	}
		elseif($row['semestername']=="7th"){
		echo "tjjjj";
		$sc=mysqli_query($con,"select * from subject where subjectname='$subject'");
		while($r=mysqli_fetch_array($sc)) {
			$a=$r['taken_classes'];
			$iv=$a+1;
			echo "$iv";
			$updt=mysqli_query($con,"update subject set taken_classes='$iv' where teacher='$username'");
		}
		foreach($_POST["check_name"] as $name){
			
		$insert=mysqli_query($con,"insert into  attendence07 values ('','$username','','$name','$dept','$semester','$subject','$batch','$session','','$date') "); 
			foreach($_POST["check_name"] as $name){
			
			$up=mysqli_query($con,"update attendence07 set active='1' where studentid='$name'");
			
		}
		}
		
		if($up>0){
			echo "<script>alert('Attendence taken successfully !')</script>";
			echo "<script>window.open('attendance.php','_self')</script>";
		}
	
	}
	elseif($row['semestername']=="8th"){
		
		$sc=mysqli_query($con,"select * from subject where subjectname='$subject'");
		while($r=mysqli_fetch_array($sc)) {
			$a=$r['taken_classes'];
			$iv=$a+1;
			echo "$iv";
			$updt=mysqli_query($con,"update subject set taken_classes='$iv' where teacher='$username'");
		}
		foreach($_POST["check_name"] as $name){
			
		$insert=mysqli_query($con,"insert into  attendence08 values ('','$username','','$name','$dept','$semester','$subject','$batch','$session','','$date') "); 
			foreach($_POST["check_name"] as $name){
			
			$up=mysqli_query($con,"update attendence08 set active='1' where studentid='$name'");
			
		}
		}
		
		if($up>0){
			echo "<script>alert('Attendence taken successfully !')</script>";
			echo "<script>window.open('attendance.php','_self')</script>";
		}
	
	}
	
	}
	?>
	
    </div>
   <!-----------footer----------------------->
<?php include("../include/admin_footer.php"); ?>
       