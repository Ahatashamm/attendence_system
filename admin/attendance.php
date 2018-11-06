<?php include("../include/admin_header.php"); ?> 
<?php
	//require 'header.php';
?>
<div class="container" style="margin-top:30px; width:1050px;">
<form action="processattendance.php" method="post">
       <div class="row">
              <h3 class="alert bg-primary text-center">Add and View Attendance Reports</h3>
              <div class="col-sm-2">Select Subject</div>
              <div class="col-sm-2">Select Department</div>
              <div class="col-sm-2">Select Program</div>
              <div class="col-sm-2">Select Batch</div>
              <div class="col-sm-2">Select Session</div>
              <div class="col-sm-2">Select Semester</div>
              
       </div>
       <div class="row">
              <div class="col-sm-2">
                     <select class="form-control" name="subjectcode">

                            <?php $result_pro=mysqli_query($con,"select * from subject_configure");
    $row_pro=mysqli_fetch_array($result_pro); 
    do
    {
        echo '<option value="'.$row_pro['course'].'">'.$row_pro['course'].'</option>';

    }while ($row_pro=mysqli_fetch_array($result_pro)); ?>

                     </select>
              </div>
              <div class="col-sm-2">
                     <select class="form-control" name="departmentid">

                            <?php  $result_th=mysqli_query($con,"select * from department");
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
                     <select class="form-control" name="session">
                            <?php  $result_cate=mysqli_query($con,"select * from semester_category");
    $row_cate=mysqli_fetch_array($result_cate); 
    do
    {
        echo '<option value="'.$row_cate['name'].'">'.$row_cate['name'].'</option>';

    }while ($row_cate=mysqli_fetch_array($result_cate)); ?>
                     </select>
              </div>
			  <div class="col-sm-2">
                     <select class="form-control" name="semester">
                            <?php  $result_cate=mysqli_query($con,"select * from semester");
    $row_cate=mysqli_fetch_array($result_cate); 
    do
    {
        echo '<option value="'.$row_cate['semestertitle'].'">'.$row_cate['semestertitle'].'</option>';

    }while ($row_cate=mysqli_fetch_array($result_cate)); ?>
                     </select>
              </div>
              
       </div>
	   <div class="row">
	   <div class="col-sm-2">Select Day</div></br>
	   <div class="col-sm-2">
                     <input class="form-control" id="txtdate" name="txtdate" value="" type="text">
              </div>
              </div>
	   
       <div class="row" style="margin-top:30px;">
              <div class="col-sm-3">
              </div>
              
              
              
              <div class="col-sm-2">
              <input class="btn btn-primary form-control" name="addreport" value="Add  Report" type="submit">
              </div>
            
              
              </div>
              </form>
	</div>
	<!-----------footer----------------------->
<?php include("../include/admin_footer.php"); ?>
       