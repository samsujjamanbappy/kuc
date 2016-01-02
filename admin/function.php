<?php 

include('connection.php');


 function group_sub($checker){
		    		$group_sub = mysql_query("SELECT * FROM subject where subject_type='optional' && group_code='$checker'");

					if('Science'==$checker)    
					{	
					echo '<tr ><td  height="35">&nbsp;Main Subject</td><td>&nbsp;<input name="sub4" type="radio" Value="Physic" checked="checked" selected > Physics </td></tr>';
					echo '<tr ><td height="35">&nbsp;Main  Subject</td><td>&nbsp;<input name="sub5" type="radio" Value="Chemistry" checked="checked" selected > Chemistry</td></tr>';
					echo '<tr ><td height="35"> &nbsp;Main Subject</td><td>&nbsp;<input name="sub6" type="radio" Value="Biology"   > Biology </td></tr>';
					echo '<tr ><td height="35">&nbsp;4th Subject</td> <td>&nbsp;<input name="sub7" type="radio" Value="Mathematics" required > Mathematics <br /> &nbsp;<input name="sub7" type="radio" Value="Psychology" required > Psychology ';
   					 
     				}elseif('Business studies'==$checker)    
					{	
					echo '<tr ><td height="35">&nbsp;Main Subject</td><td>&nbsp;<input name="sub4" type="radio" Value="Accounting" checked="checked" selected > Accounting </td></tr>';
					echo '<tr ><td height="35">&nbsp;Main  Subject</td><td>&nbsp;<input name="sub5" type="radio" Value="Management" checked="checked" selected > Management</td></tr>';
					echo '<tr ><td height="35"> &nbsp;Main Subject</td><td>&nbsp;<input name="sub6" type="radio" checked="checked" Value="Production Management & Supply" required > Production Management & Supply </td></tr>';
					echo '<tr ><td height="35">&nbsp;4th Subject</td><td>&nbsp;<input name="sub7" type="radio"  checked="checked" Value="Secraterial Science" required > Secraterial Science ';	}
     				 
					
		    		 elseif('Humanity'==$checker)    
					{	
					echo '<tr ><td height="35">&nbsp;Main Subject</td><td>&nbsp;<input name="sub4" type="radio" Value="Economices" required> Economics <br />&nbsp;<input name="sub4" type="radio" Value="Logical Science"  required> Logical Science</td></tr>';
					echo '<tr ><td height="35">&nbsp;Main  Subject</td><td>&nbsp;<input name="sub5" type="radio" Value="Civics" checked="checked" selected > Civics</td></tr>';
					echo '<tr ><td height="35"> &nbsp;Main Subject</td><td>&nbsp;<input name="sub6" type="radio" checked="checked" Value="History of Islam" required > History of Islam </td></tr>';
					echo '<tr ><td height="35">&nbsp;4th Subject</td><td>&nbsp;<input name="sub7" type="radio"   Value="Islamic studies" required > Islamic studies <br />&nbsp;<input name="sub7" type="radio"  Value="Psychology" required > Psychology ';	}
     				 
					
		    			};
					
		    

 function result_insert($checker){
 						if($checker='1st'||'2nd'||'3rd'){

 								$result_insert= mysql_query('SELECT * FROM 1st_semester WHERE id="$search"');
								while($row=mysql_fetch_array($result_insert)){
									$id = $row['id'];
									$sub1 = $row['sub1'];
									$sub2= $row['sub2'];
									$sub3 = $row['sub3'];
									$sub4 = $row['sub4'];
									$sub5= $row['sub5'];
									$sub6 = $row['sub6'];
									$sub7= $row['sub7'];
									}
									echo '<center><table border="2">';
									?>
									<tr><td>&nbsp;<?php echo $sub1;?></td><td><input type="text" name="sub1_m" /></td></tr>
									<tr><td>&nbsp;<?php echo $sub2; ?></td><td><input type="text" name="sub2_m" /></td></tr>
									<tr><td>&nbsp;<?php echo $sub3; ?></td><td><input type="text" name="sub3_m" /></td></tr>
									<tr><td>&nbsp;<?php echo $sub4; ?></td><td><input type="text" name="sub4_m" /></td></tr>
									<tr><td>&nbsp;<?php echo $sub5; ?></td><td><input type="text" name="sub5_m" /></td></tr>
									<tr><td>&nbsp;<?php echo $sub6; ?></td><td><input type="text" name="sub6_m" /></td></tr>
									<tr><td>&nbsp;<?php echo $sub7; ?></td><td><input type="text" name="sub7_m" /></td></tr>
									<tr><td>&nbsp;</td><td><input type="Submit" value="Submit" /></td></tr></table>
								<?php }else{ echo 'sorry';};
									
 					



 							};
								

?>