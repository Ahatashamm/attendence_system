<?php include("../include/admin_header.php"); ?>
<?php

?>
<?php
if(isset($_POST['submit'])){
	$name=$_POST['username'];
	$password=$_POST['password'];
	$insert=mysqli_query($con,"insert into admin values('','$name','$password','','','')");
	if($insert>0){
		 echo "<script>alert('you have created admin successfully !')</script>";
	    echo "<script>window.open ('user.php','_self')</script>";

	}else{
		echo "<script>alert('Oops! error occured')</script>";
	    echo "<script>window.open ('user.php','_self')</script>";

	}
}

?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Create Admin</h4>
                            </div>
                            <div class="content">
                                <form method="post" action="">
                                    <div class="row">
                                        <div class="col-md-5">
                                           
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Designation</label>
                                                <input type="text" class="form-control" placeholder="Username" name="username" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" class="form-control"  name="password" placeholder="password">
                                            </div>
                                        </div>
                                    </div>

                                    

                                    

                                    
                                    

                                    <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Create Admin</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>


        <?php include("../include/admin_footer.php"); ?>