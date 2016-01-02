
<?php 

 include("connection.php");

$batch = $_POST['batch'];

$exam = $_POST['exam'];

$status = $_POST['status'];   

$message =$_POST['message']; 

            
            mysql_query("INSERT INTO result_publish(batch,exam_type,status,message,short_name) VALUES('$batch','$exam_type','$status','$message','$exam')");
          

 ?>