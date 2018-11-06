<?php
include("include/header.php");
?>
<?php
if($_SESSION['user']==0 && $_SESSION['admin_login']!="loged in"){
  
 // header("Location:index.php");
 echo "<script>window.open('index.php','_self')</script>";
}
$user=$_SESSION['user'];

?>
<div class="container">
		
	</div>

				<div class="cover" style="background-color:white; margin-top:200px;">
              <h3 class="text-center" style="color:blue; " >The Millennium University</h3>
			   <?php
			   $over1=mysqli_query($con,"select DISTINCT `dept` from attendence  where studentid='$user' 
			   UNION select DISTINCT `dept` from attendence02  where studentid='$user' 
			   UNION select DISTINCT `dept` from attendence03  where studentid='$user' 
			   UNION select DISTINCT `dept` from attendence04  where studentid='$user' 
			   UNION select DISTINCT `dept` from attendence05  where studentid='$user' 
			   UNION select DISTINCT `dept` from attendence06  where studentid='$user' 
			   UNION select DISTINCT `dept` from attendence07  where studentid='$user' 
			   UNION select DISTINCT `dept` from attendence08  where studentid='$user'" 
			   
			   );
			   while($row1=mysqli_fetch_array($over1))
			   {
				 $dept=$row1['dept'];  
				  
			   }
			   $over2=mysqli_query($con,"select DISTINCT `semester` from attendence  where studentid='$user' 
			   UNION select DISTINCT `semester` from attendence02  where studentid='$user' 
			   UNION select DISTINCT `semester` from attendence03  where studentid='$user' 
			   UNION select DISTINCT `semester` from attendence04  where studentid='$user' 
			   UNION select DISTINCT `semester` from attendence05  where studentid='$user' 
			   UNION select DISTINCT `semester` from attendence06  where studentid='$user' 
			   UNION select DISTINCT `semester` from attendence07  where studentid='$user' 
			   UNION select DISTINCT `semester` from attendence08  where studentid='$user'" 
			   
			   );
			   
			   while($row2=mysqli_fetch_array($over2))
			   {
				   
				 $semester=$row2['semester'];  
				  
			   }
			   $over3=mysqli_query($con,"select DISTINCT `batch` from attendence  where studentid='$user' 
			   UNION select DISTINCT `batch` from attendence02  where studentid='$user' 
			   UNION select DISTINCT `batch` from attendence03  where studentid='$user' 
			   UNION select DISTINCT `batch` from attendence04  where studentid='$user' 
			   UNION select DISTINCT `batch` from attendence05  where studentid='$user' 
			   UNION select DISTINCT `batch` from attendence06  where studentid='$user' 
			   UNION select DISTINCT `batch` from attendence07  where studentid='$user' 
			   UNION select DISTINCT `batch` from attendence08  where studentid='$user'" 
			   
			   );
			   
			   while($row3=mysqli_fetch_array($over3))
			   {
				 $batch=$row3['batch'];  
			 
			   }
			   ?>
			  <div class="text-center">
			  This is your attendence report for <strong>DEPARTMENT</strong> <span style="color:red;"> <?php echo "$dept";?>
			  </span>  <strong>SEMESTER</strong> <span style="color:red;"> <?php echo "$semester";?></span>  <strong>BATCH</strong><span style="color:red;"> <?php echo "$batch";?></span>
			  </div>
              <table style="border-radius:25px ; height:40px; color:white;width:200px; float:right; margin-top:120px; margin-bottom:10px;background-color:maroon;" >
              
              <tbody><tr>
              <td >
			
              Total Classes Held</td>
              <td style="background-color:green; border-radius:25px; width:50px;" class="text-center">
              <?php
			  
			  $fs=mysqli_query($con,"select * from subject where semestername='$semester'");
		$row=mysqli_fetch_array($fs);
		$row['semestername'];
			  if($row['semestername']=="1st"){
			  $total=mysqli_query($con,"select * from subject where (subjectname='Computer Programming' ) ");
			  $c=mysqli_fetch_array($total);
			  $cc=$c['taken_classes'];
			 
			  $total2=mysqli_query($con,"select * from subject where (subjectname='Computer fundamental' ) ");
			  $ces=mysqli_fetch_array($total2);
			  $ccc=$ces['taken_classes'];
			  
			  $all=$cc+$ccc;
			  echo "$all";
			  }
			  elseif($row['semestername']=="2nd"){
			  $total=mysqli_query($con,"select * from subject where (subjectname='Data Structure' ) ");
			  $c=mysqli_fetch_array($total);
			  $cc=$c['taken_classes'];
			 
			  $total2=mysqli_query($con,"select * from subject where (subjectname='Algorithm' ) ");
			  $ces=mysqli_fetch_array($total2);
			  $ccc=$ces['taken_classes'];
			  
			  $all=$cc+$ccc;
			  echo "$all";
			  }
			  elseif($row['semestername']=="3rd"){
			  $total=mysqli_query($con,"select * from subject where (subjectname='compiler' ) ");
			  $c=mysqli_fetch_array($total);
			  $cc=$c['taken_classes'];
			 
			  $total2=mysqli_query($con,"select * from subject where (subjectname='Java' ) ");
			  $ces=mysqli_fetch_array($total2);
			  $ccc=$ces['taken_classes'];
			  
			  $all=$cc+$ccc;
			  echo "$all";
			  }
			  elseif($row['semestername']=="4th"){
			  $total=mysqli_query($con,"select * from subject where (subjectname='Telecommunication' ) ");
			  $c=mysqli_fetch_array($total);
			  $cc=$c['taken_classes'];
			 
			  $total2=mysqli_query($con,"select * from subject where (subjectname='Data Communication' ) ");
			  $ces=mysqli_fetch_array($total2);
			  $ccc=$ces['taken_classes'];
			  
			  $all=$cc+$ccc;
			  echo "$all";
			  }
			  elseif($row['semestername']=="5th"){
			  $total=mysqli_query($con,"select * from subject where (subjectname='Math' ) ");
			  $c=mysqli_fetch_array($total);
			  $cc=$c['taken_classes'];
			 
			  $total2=mysqli_query($con,"select * from subject where (subjectname='Architecture' ) ");
			  $ces=mysqli_fetch_array($total2);
			  $ccc=$ces['taken_classes'];
			  
			  $all=$cc+$ccc;
			  echo "$all";
			  }
			  elseif($row['semestername']=="6th"){
			  $total=mysqli_query($con,"select * from subject where (subjectname='Simulation' ) ");
			  $c=mysqli_fetch_array($total);
			  $cc=$c['taken_classes'];
			 
			  $total2=mysqli_query($con,"select * from subject where (subjectname='Software Engineering' ) ");
			  $ces=mysqli_fetch_array($total2);
			  $ccc=$ces['taken_classes'];
			  
			  $all=$cc+$ccc;
			  echo "$all";
			  }
			  elseif($row['semestername']=="7th"){
			  $total=mysqli_query($con,"select * from subject where (subjectname='System Analysis' ) ");
			  $c=mysqli_fetch_array($total);
			  $cc=$c['taken_classes'];
			 
			  $total2=mysqli_query($con,"select * from subject where (subjectname='Image Processing' ) ");
			  $ces=mysqli_fetch_array($total2);
			  $ccc=$ces['taken_classes'];
			  
			  $all=$cc+$ccc;
			  echo "$all";
			  }
			   elseif($row['semestername']=="8th"){
			  $total=mysqli_query($con,"select * from subject where (subjectname='AI' ) ");
			  $c=mysqli_fetch_array($total);
			  $cc=$c['taken_classes'];
			 
			  $total2=mysqli_query($con,"select * from subject where (subjectname='Robotics' ) ");
			  $ces=mysqli_fetch_array($total2);
			  $ccc=$ces['taken_classes'];
			  
			  $all=$cc+$ccc;
			  echo "$all";
			  }
			  
			  
			  ?>
			  
			  
			  </td>
              </tr>
              </tbody></table>
			  <table class="table table-bordered">
			  <?php
			  $fs=mysqli_query($con,"select * from subject where semestername='$semester'");
		$row=mysqli_fetch_array($fs);
		$row['semestername'];
		//echo "$row[semestername]";
			  ?>
			  
			  <thead>
			  <?php if($row['semestername']=='1st' ){
				  ?>
			  <tr style="background-color:#3396ff; color:red;">
			  
			  <th>name</th>
			  <th>ID</th>
			  <th>c programming</th>
			  <th>c fundamental</th>
			  <th>total attendence</th>
			  <th>percentage</th>
			  </tr>
			  <?php
			  }elseif($row['semestername']=='2nd' ){
				  ?>
				  <tr style="background-color:#3396ff; color:red;">
			  
			  <th>name</th>
			  <th>ID</th>
			  <th>Alogrithm</th>
			  <th>Data Structure</th>
			  <th>total attendence</th>
			  <th>percentage</th>
			  </tr>
			  <?php
			  }elseif($row['semestername']=='3rd' ){
				  ?>
				  <tr style="background-color:#3396ff; color:red;">
			  
			  <th>name</th>
			  <th>ID</th>
			  <th>Compiler</th>
			  <th>Java</th>
			  <th>total attendence</th>
			  <th>percentage</th>
			  </tr>
			  <?php
			  }elseif($row['semestername']=='4th' ){
				  ?>
				  <tr style="background-color:#3396ff; color:red;">
			  
			  <th>name</th>
			  <th>ID</th>
			  <th>Data Communication</th>
			  <th>Telecommunication</th>
			  <th>total attendence</th>
			  <th>percentage</th>
			  </tr>
			  <?php
			  }elseif($row['semestername']=='5th' ){
				  ?>
				  <tr style="background-color:#3396ff; color:red;">
			  
			  <th>name</th>
			  <th>ID</th>
			  <th>Math</th>
			  <th>Architecture</th>
			  <th>total attendence</th>
			  <th>percentage</th>
			  </tr>
			  <?php
			  }elseif($row['semestername']=='6th' ){
				  ?>
				  <tr style="background-color:#3396ff; color:red;">
			  
			  <th>name</th>
			  <th>ID</th>
			  <th>Simulation</th>
			  <th>Software Engineering</th>
			  <th>total attendence</th>
			  <th>percentage</th>
			  </tr>
			  <?php
			  }elseif($row['semestername']=='7th' ){
				  ?>
				  <tr style="background-color:#3396ff; color:red;">
			  
			  <th>name</th>
			  <th>ID</th>
			  <th>c programming</th>
			  <th>c fundamental</th>
			  <th>total attendence</th>
			  <th>percentage</th>
			  </tr>
			  <?php
			  }elseif($row['semestername']=='8th' ){
				  ?>
				  <tr style="background-color:#3396ff; color:red;">
			  
			  <th>name</th>
			  <th>ID</th>
			  <th>c programming</th>
			  <th>c fundamental</th>
			  <th>total attendence</th>
			  <th>percentage</th>
			  </tr>
			  <?php
			  }
			  
			  ?>
			  
			  
			  
			  
			  
			  </thead>
			  <tbody>
			  
			  <tr>
			 
			  <td><?php echo "$usern";?></td>
			  <td><?php echo "$user";?></td>
			 
			  <?php 
			  $total=0;
			  if($row['semestername']=="1st"){
			   $at=mysqli_query($con,"select * from attendence where (course='Computer Programming'  and studentid='$user' and active='1')");
				 $ci=mysqli_num_rows($at);
					  
					 ?>
			  <td class="text-center" ><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
			  <?php echo "$ci";?></div></td>
			  
				  
			 <?php 
			    $ats=mysqli_query($con,"select * from attendence where (course='Computer fundamental'  and studentid='$user' and active='1')");
				 $cis=mysqli_num_rows($ats);
				  ?>
				  
				  
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$cis";?></div></td>
				   <?php $alli=$ci+$cis; ?>
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$alli";?></div></td>
				   <?php $pr=($alli*100)/$all; ?>
				   <td><?php echo "$pr%";?></td>
				<?php   
				   
			  }
				   
				?> 
           <?php
		   if($row['semestername']=="2nd"){
			   $at=mysqli_query($con,"select * from attendence02 where (course='Data Structure'  and studentid='$user' and active='1')");
				 $ci=mysqli_num_rows($at);
					  
					 ?>
			  <td class="text-center" ><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
			  <?php echo "$ci";?></div></td>
			  
				  
			 <?php 
			    $ats=mysqli_query($con,"select * from attendence02 where (course='Algorithm'  and studentid='$user' and active='1')");
				 $cis=mysqli_num_rows($ats);
				  ?>
				  
				  
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$cis";?></div></td>
				   <?php $alli=$ci+$cis; ?>
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$alli";?></div></td>
				   <?php $pr=($alli*100)/$all; ?>
				   <td><?php echo "$pr%";?></td>
				<?php   
				   
			  }
				   
				?>
				<?php
		   if($row['semestername']=="3rd"){
			   $at=mysqli_query($con,"select * from attendence03 where (course='compiler'  and studentid='$user' and active='1')");
				 $ci=mysqli_num_rows($at);
					  
					 ?>
			  <td class="text-center" ><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
			  <?php echo "$ci";?></div></td>
			  
				  
			 <?php 
			    $ats=mysqli_query($con,"select * from attendence03 where (course='java'  and studentid='$user' and active='1')");
				 $cis=mysqli_num_rows($ats);
				  ?>
				  
				  
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$cis";?></div></td>
				   <?php $alli=$ci+$cis; ?>
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$alli";?></div></td>
				   <?php $pr=($alli*100)/$all; ?>
				   <td><?php echo "$pr%";?></td>
				<?php   
				   
			  }
				   
				?>
		 <?php
		   if($row['semestername']=="4th"){
			   $at=mysqli_query($con,"select * from attendence04 where (course='Telecommunication'  and studentid='$user' and active='1')");
				 $ci=mysqli_num_rows($at);
					  
					 ?>
			  <td class="text-center" ><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
			  <?php echo "$ci";?></div></td>
			  
				  
			 <?php 
			    $ats=mysqli_query($con,"select * from attendence04 where (course='Data Communication'  and studentid='$user' and active='1')");
				 $cis=mysqli_num_rows($ats);
				  ?>
				  
				  
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$cis";?></div></td>
				   <?php $alli=$ci+$cis; ?>
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$alli";?></div></td>
				   <?php $pr=($alli*100)/$all; ?>
				   <td><?php echo "$pr%";?></td>
				<?php   
				   
			  }
				   
				?>
				<?php
		   if($row['semestername']=="5th"){
			   $at=mysqli_query($con,"select * from attendence05 where (course='Math'  and studentid='$user' and active='1')");
				 $ci=mysqli_num_rows($at);
					  
					 ?>
			  <td class="text-center" ><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
			  <?php echo "$ci";?></div></td>
			  
				  
			 <?php 
			    $ats=mysqli_query($con,"select * from attendence05 where (course='Architecture'  and studentid='$user' and active='1')");
				 $cis=mysqli_num_rows($ats);
				  ?>
				  
				  
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$cis";?></div></td>
				   <?php $alli=$ci+$cis; ?>
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$alli";?></div></td>
				   <?php $pr=($alli*100)/$all; ?>
				   <td><?php echo "$pr%";?></td>
				<?php   
				   
			  }
				   
				?>
				<?php
		   if($row['semestername']=="6th"){
			   $at=mysqli_query($con,"select * from attendence06 where (course='Simulation'  and studentid='$user' and active='1')");
				 $ci=mysqli_num_rows($at);
					  
					 ?>
			  <td class="text-center" ><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
			  <?php echo "$ci";?></div></td>
			  
				  
			 <?php 
			    $ats=mysqli_query($con,"select * from attendence06 where (course='Software Engineering'  and studentid='$user' and active='1')");
				 $cis=mysqli_num_rows($ats);
				  ?>
				  
				  
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$cis";?></div></td>
				   <?php $alli=$ci+$cis; ?>
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$alli";?></div></td>
				   <?php $pr=($alli*100)/$all; ?>
				   <td><?php echo "$pr%";?></td>
				<?php   
				   
			  }
				   
				?>
				<?php
		   if($row['semestername']=="7th"){
			   $at=mysqli_query($con,"select * from attendence07 where (course='System Analysis'  and studentid='$user' and active='1')");
				 $ci=mysqli_num_rows($at);
					  
					 ?>
			  <td class="text-center" ><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
			  <?php echo "$ci";?></div></td>
			  
				  
			 <?php 
			    $ats=mysqli_query($con,"select * from attendence07 where (course='Image Processing'  and studentid='$user' and active='1')");
				 $cis=mysqli_num_rows($ats);
				  ?>
				  
				  
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$cis";?></div></td>
				   <?php $alli=$ci+$cis; ?>
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$alli";?></div></td>
				   <?php $pr=($alli*100)/$all; ?>
				   <td><?php echo "$pr%";?></td>
				<?php   
				   
			  }
				   
				?>
				<?php
		   if($row['semestername']=="8th"){
			   $at=mysqli_query($con,"select * from attendence08 where (course='AI'  and studentid='$user' and active='1')");
				 $ci=mysqli_num_rows($at);
					  
					 ?>
			  <td class="text-center" ><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
			  <?php echo "$ci";?></div></td>
			  
				  
			 <?php 
			    $ats=mysqli_query($con,"select * from attendence08 where (course='Robotics'  and studentid='$user' and active='1')");
				 $cis=mysqli_num_rows($ats);
				  ?>
				  
				  
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$cis";?></div></td>
				   <?php $alli=$ci+$cis; ?>
				   <td><div class="text-center" style="background-color:green;border-radius:25px;width:30px;height:20px; color:white;">
				  <?php echo "$alli";?></div></td>
				   <?php $pr=($alli*100)/$alli; ?>
				   <td><?php echo "$pr%";?></td>
				<?php   
				   
			  }
				 //echo "$user";  
				 //echo "$batch";	
				?>
		 
			  </tr>
			 
			  
			  </tbody>
			  </table>
              </div>
              
	<?php
include("include/footer.php");
?>