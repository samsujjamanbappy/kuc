<?php
  session_start();
     $batch=$_REQUEST['batch'];

     include("connection.php");
		$result = mysql_query("SELECT roll FROM student_info where batch='$batch'");
 
		while($row=mysql_fetch_array($result)){
		$roll = $row['roll'];

		mysql_query("DELETE FROM 1st_semester WHERE roll=$roll");
		mysql_query("DELETE FROM 2nd_semester WHERE roll=$roll");
		mysql_query("DELETE FROM year_final WHERE roll=$roll");
		mysql_query("DELETE FROM pre_test WHERE roll=$roll");
		mysql_query("DELETE FROM test_exam WHERE roll=$roll");
}
     mysql_query("DELETE FROM batch WHERE batch=$batch");
	 mysql_query("DELETE FROM result_publish WHERE batch=$batch");
	 mysql_query("DELETE FROM student_info where batch='$batch'");
	 

 header("location:view_all_batch.php");
     
?>