<?php 
include("../include/admin_header.php");
?>
	<?php
	if(isset($_POST['submit'])){
	
	$name=$_POST['dname'];

        
	 	
	 $sql=mysqli_query($con,"INSERT INTO `program`(`programid`, `programtitle`)
	 VALUES('','$name')");
	 if($sql!=0){
		 echo "<script>alert('Congratulation ! added successfully !')</script>";
	    echo "<script>window.open ('program.php','_self')</script>";
	 }
	 else{
		 echo "<script>alert('0ops ! error occured !')</script>";
	    echo "<script>window.open ('program.php','_self')</script>";
	 }
}

?>
<?php
	if(isset($_POST['edit'])){
	
	$id=$_POST['id'];
	$name=$_POST['dname'];

        
	 	
	 $sql=mysqli_query($con,"UPDATE program SET   `programtitle`='$name' where programid='$id'" );
	 
	 if($sql!=0){
		  echo "<script>alert('Congratulation ! edited successfully !')</script>";
	    echo "<script>window.open ('program.php','_self')</script>";
	 }
	 else{
		 echo "<script>alert('0ops ! error occured !')</script>";
	    echo "<script>window.open ('program.php','_self')</script>";
	 }
}

?>
        

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                
	           		<?php 
			if(isset($_GET['delete'])){
				$id=$_GET['delete'];
				$sql=mysqli_query($con,"DELETE FROM `program` WHERE programid='$id'");
				if($sql!=0){
		  echo "<script>alert('Congratulation ! deleted successfully !')</script>";
	    echo "<script>window.open ('program.php','_self')</script>";
	 }
	 else{
		 echo "<script>alert('0ops ! error occured !')</script>";
	    echo "<script>window.open ('program.php','_self')</script>";
	 }
			}
			?>
	<div class="row">
        <div class=" col-md-4 ">
              <?php
			  if(isset($_GET['edit'])){
				$id=$_GET['edit'];

$sql=mysqli_query($con,"select * from program where programid='$id'");
								while($row=mysqli_fetch_array($sql)){
									$id=$row['programid'];
									$name=$row['programtitle'];
			?>
            <div class="alert alert-info">
               Edit program from here.
            </div>
            <form class="form-horizontal" action="" method="post">
                <fieldset>
				<input type="hidden" name="id" value="<?php echo "$id";?>" >
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                        <input type="text" class="form-control" placeholder="insert program name" name="dname" value="<?php echo "$name";?>" >
                    </div>
                    <div class="clearfix"></div><br>

                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary" name="edit">Edit program</button>
                    </p>
                </fieldset>
		
            </form>
			<?php
								}
			  }
			  else{
			  
			?>
			<div class="alert alert-info">
               Add your program from here.
            </div>
            <form class="form-horizontal" action="" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                        <input type="text" class="form-control" placeholder="insert program name" name="dname" required="required">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="clearfix"></div>

                   
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary" name="submit">Add program</button>
                    </p>
                </fieldset>
		
            </form>
			<?php 
			  }
			  ?>
        </div>
		
		 <div class="box col-md-8">
    <div class="box-inner">
	
    
    <div class="box-content">
     <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Id</th>
        
        <th>program Name</th>
		
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
	<?php
								$sql=mysqli_query($con,"select * from program");
								while($row=mysqli_fetch_array($sql)){
									$id=$row['programid'];
									
									$name=$row["programtitle"];
									
									
									?>
    <tr>
        <td><?php echo "$id";?></td>
       
        <td class="center"><?php echo "$name";?></td>
         
        <td class="center">
           
            <a class="btn btn-info" href="<?php echo "program.php?edit=$id";?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="<?php echo "program.php?delete=$id";?>">
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
        <!--/span-->
    </div><!--/row-->
          
    


    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->


     <?php 
	include("../include/admin_footer.php");
	?>


  






</body>
</html>
