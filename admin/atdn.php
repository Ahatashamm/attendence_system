<?php
include("../include/admin_header.php"); 
?>
<?php
	
      
                ?>
				<div class="cover" style="background-color:white;">
              <h3 class="text-center" style="color:blue;">The Millennium University</h3>
			   <?php
			   $over1=mysqli_query($con,"select DISTINCT `dept` from attendence");
			   while($row=mysqli_fetch_array($over1))
			   {
				 $dept=$row['dept'];  
				  
			   }
			   $over2=mysqli_query($con,"select DISTINCT `semester` from attendence");
			   while($row=mysqli_fetch_array($over2))
			   {
				   
				 $semester=$row['semester'];  
				  
			   }
			   $over3=mysqli_query($con,"select DISTINCT `batch` from attendence");
			   while($row=mysqli_fetch_array($over3))
			   {
				 $batch=$row['batch'];   
			   }
			   ?>
			  <div class="text-center">
			  Overall attedence report for <strong>DEPARTMENT</strong> <span style="color:red;"> <?php echo "$dept";?>
			  </span>  <strong>SEMESTER</strong> <span style="color:red;"> <?php echo "$semester";?></span>  <strong>BATCH</strong><span style="color:red;"> <?php echo "$batch";?></span>
			  </div>
              <table style="border-radius:25px ; height:40px; color:white;width:200px; float:right; margin-top:120px; margin-bottom:10px;background-color:maroon;" >
              
              <tbody><tr>
              <td >
              Total Classes Held</td>
              <td style="background-color:green; border-radius:25px; width:50px;" class="text-center">
              <?php
			  $total=mysqli_query($con,"select * from subject where (subjectname='Computer Programming' ) ");
			  $c=mysqli_fetch_array($total);
			  $cc=$c['taken_classes'];
			 
			  $total2=mysqli_query($con,"select * from subject where (subjectname='Computer fundamental' ) ");
			  $ces=mysqli_fetch_array($total2);
			  $ccc=$ces['taken_classes'];
			  
			  $all=$cc+$ccc;
			  echo "$all";
			  ?>
			  
			  
			  </td>
              </tr>
              </tbody></table>
			  <table class="table table-bordered">
			  
			  
			  <thead>
			  <tr style="background-color:lightblue; color:red;">
			  <th>ID</th>
			  <th>c programming</th>
			  <th>c fundamental</th>
			  <th>total attendence</th>
			  <th>percentage</th>
			  </tr>
			  </thead>
			  <tbody>
			  <?php
			  
				$sid=mysqli_query($con,"select DISTINCT `studentid` from attendence ");
			  while($r=mysqli_fetch_array($sid)){
					  
			  ?>
			  <tr>
			 
			  <td><?php echo "$r[studentid]";?></td>
			 
			  <?php 
			  $total=0;
			   $at=mysqli_query($con,"select * from attendence where (course='Computer Programming'  and studentid='$r[studentid]' and active='1')");
				 $ci=mysqli_num_rows($at);
					  
					 ?>
			  <td class="text-center" ><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; 
			  color:white;"><?php echo "$ci";?></div></td>
			  
				  
			 <?php 
			    $ats=mysqli_query($con,"select * from attendence where (course='Computer fundamental'  and studentid='$r[studentid]' and active='1')");
				 $cis=mysqli_num_rows($ats);
				  ?>
				  
				  
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$cis";?></div></td>
				   <?php $alli=$ci+$cis; ?>
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$alli";?></div></td>
				   <?php $pr=($alli*100)/$all; ?>
				   <td><?php echo "$pr%";?></td>
				   
				   
				   
				   
				   
			  </tr>
			  <?php
			  
			  }  
			  
			  ?>
			  
			  </tbody>
			  </table>
              </div>
<!-----------footer----------------------->
<?php include("../include/admin_footer.php"); ?>
       				