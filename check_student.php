<?php 

include("connection.php");

session_start();

	$rollno=$_POST['roll'];
	$_SESSION['pass']=$_POST['pass'];
	$password=$_SESSION['pass'];

	$rollno1=md5($rollno);
if ($rollno && $password){
	
	$query = mysql_query("SELECT * FROM student_info WHERE roll='$rollno'");
	$numrows = mysql_num_rows($query);
	
	if($numrows != 0){
	
		while($row = mysql_fetch_assoc($query)){
		
					$dbrollno = $row['roll'];
					$dbpassword = $row['password'];
					$dbname=$row['name'];
					$dbbatch=$row['batch'];
				}
	
					if($rollno==$dbrollno){
							if($password==$dbpassword){

									$_SESSION['rollno']=$rollno;
									$_SESSION['batch']=$dbbatch;
									$_SESSION['name']=$dbname;

								header("location:index.php");
		
														}else{
																echo "<script>alert('password is incorrect')</script>";
																					include("index.php");
																}
				
										}else{
												echo "<script>alert('User name or password is incorrect')</script>";
										include("index.php");
												}
			
			
							}else{ 
								echo "<script>alert('User name or password is incorrect')</script>";
													include("index.php");
								}

					}else{ 
					echo "<script>alert('User name or password is incorrect')</script>";
														include("index.php");
						}
					
?>