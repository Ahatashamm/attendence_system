<?php
include("../include/admin_header.php"); 
?>
<?php 
if(isset($_GET['collect'])){
	$id=$_GET['collect'];
	$matching=mysqli_query($con,"select * from blood where id='$id' ");
	$recipients = array();
	while($row=mysqli_fetch_array($matching)){
		$thana=$row['thana'];
        $zilla=	$row['zilla'];
        $bgroup=$row['bgroup'];
    $phone=$row['phone'];
//$email=$row['email'];
   $recipients[] = $row['email'];	
	
	$sql=mysqli_query($con,"select * from customer where (thana='$thana' and zilla='$zilla' and blood_group='$bgroup') ");
	$count=mysqli_num_rows($sql);
		if($count==0){
			$to = 'mdahatasham@thejournalexpress24.com';
$subject = "blood collection failed";
$body = "We have no matched doner for u right now";
$headers = 'From: mdahatashamm@gmail.com' . "\r\n" ;
$headers .= 'Reply-To: mdahatashamm@gmail.com' . "\r\n";
$headers .= 'BCC: ' . implode(', ', $recipients) . "\r\n";

mail($to, $subject, $body, $headers);
		}
		else{
	
	$recipientss = array();
while($result = mysqli_fetch_array($sql)) {  
										
											$mname=$result['name'];
											$mphone=$result['phone'];
 
    $recipientss[] = $result['email'];
}

$to = 'mdahatasham@thejournalexpress24.com';
$subject = "need for blood";
$body = "Urgent blood need waiting for your reply";
$headers = 'From: mdahatasham@thejournalexpress24.com' . "\r\n" ;
$headers .= 'Reply-To: mdahatasham@thejournalexpress24.com' . "\r\n";
$headers .= 'BCC: ' . implode(', ', $recipientss) . "\r\n";

if(mail($to, $subject, $body, $headers)){
	echo "<script>alert('successfully emailed')</script>";
}
}
	}
}
	
?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Request for blood</h4>
                              
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
										<th>Date</th>
                                        <th>Name</th>
                                    	<th>Address</th>
                                    	<th>Blood Group</th>
                                    	<th>Phone</th>
                                    	
                                    
                                    	<th>Actions</th>
                                    </thead>
                                    <tbody>
									<?php 
									$show_info=mysqli_query($con,"select * from blood");
									while($result=mysqli_fetch_array($show_info)){
										$id=$result['id'];
										$name=$result['name'];
										$email=$result['email'];
										$thana=$result['thana'];
										$zilla=$result['zilla'];
										$bgroup=$result['bgroup'];
										$date=$result['date'];
								        $phone=$result['phone'];
										
										/*  */
											?>
                                        <tr>
										     <td><?php echo "$date";?></td>
                                        	<td><?php echo "$name";?></td>
                                        	<td><?php echo "$email </br>$thana,$zilla";?></td>
                                        	<td><?php echo "$bgroup";?></td>
                                        	<td><?php echo "$phone";?></td>
                                        	
                                        	
                                        	<td><a  class="btn btn-info" href="<?php echo "table.php?collect=$id";?>">Collect blood</a></td>
                                        </tr>
										<?php
										}
									
									?>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Table on Plain Background</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Salary</th>
                                    	<th>Country</th>
                                    	<th>City</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Dakota Rice</td>
                                        	<td>$36,738</td>
                                        	<td>Niger</td>
                                        	<td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Minerva Hooper</td>
                                        	<td>$23,789</td>
                                        	<td>Curaçao</td>
                                        	<td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Sage Rodriguez</td>
                                        	<td>$56,142</td>
                                        	<td>Netherlands</td>
                                        	<td>Baileux</td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Philip Chaney</td>
                                        	<td>$38,735</td>
                                        	<td>Korea, South</td>
                                        	<td>Overland Park</td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Doris Greene</td>
                                        	<td>$63,542</td>
                                        	<td>Malawi</td>
                                        	<td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

<?php include("../include/admin_footer.php"); ?>
