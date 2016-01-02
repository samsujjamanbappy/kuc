<?php
  session_start();
     $batch=$_SESSION['batch'];
      $roll=$_REQUEST['ids'];

     include("connection.php");
     
     $delete= mysql_query("DELETE FROM student_info WHERE roll=$roll && batch=$batch");      
     mysql_query("DELETE FROM 1st_semester WHERE roll=$roll");
     mysql_query("DELETE FROM 2nd_semester WHERE roll=$roll");
     mysql_query("DELETE FROM year_final WHERE roll=$roll");
     mysql_query("DELETE FROM pre_test WHERE roll=$roll");
     mysql_query("DELETE FROM test_exam WHERE roll=$roll");
    

     $result7= mysql_query("SELECT * FROM batch where batch='$batch'");

while($row=mysql_fetch_array($result7)){
$total_s=$row['total_student'];
}
$total_student=$total_s-1;

    if ($delete==true) {

 
 mysql_query("UPDATE batch SET total_student=$total_student where batch=$batch");      }else {};




 header("location:view_allstudent.php");
     
?>