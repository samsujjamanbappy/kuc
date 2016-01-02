<?php 

include("connection.php");

	$name=$_POST['username'];
	$password=$_POST['password'];


$type=$_POST['type'];


if ($name && $password){
	
	$query = mysql_query("SELECT * FROM login WHERE name='$name'&& type='$type'");
	$numrows = mysql_num_rows($query);
	
	if($numrows != 0){
	
		while($row = mysql_fetch_assoc($query)){
		
					$dbname = $row['name'];	
					$te_id = $row['id'];
					$fname = $row['full_name'];
					$dbpassword = $row['password'];
					$department = $row['department'];
					
				}
		
					if($name==$dbname){
							if($password==$dbpassword){
								if ($type=="admin"){
								session_start();
								$_SESSION['admin']=$name;
								$_SESSION['fname']=$fname;

								header("location:admin/dashboard.php");
		
														
								}elseif ($type=="teacher"){
								session_start();
								$_SESSION['teacher']=$name;
								$_SESSION['te_id']=$te_id;
								$_SESSION['fname']=$fname;
								$_SESSION['department']=$department;

								header("location:teacher/teacher.php");

														
										};
												}else{
										
																echo "<script>alert('User name or password is incorrect')</script>"; 
																include("admin.php");
																}
				
										}else{
											echo "<script>alert('User name or password is incorrect')</script>";
											include("admin.php");
												}
			
			
							}else{ 
								echo "<script>alert('User name or password is incorrect')</script>";
								include("admin.php");
								}

					}else{ 
							echo "<script>alert('You have to type Vaild Username and Password!')</script>";
							include("admin.php");
						}

						echo mysql_error();
					

?>