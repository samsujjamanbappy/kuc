<?php
  session_start();
     $id=$_REQUEST['sdi'];
     $batch=$_REQUEST['batch'];

     include("connection.php");
     
     mysql_query("DELETE FROM section_teacher WHERE batch=$batch && teacher_id=$id");

 header("location:view_assign_batch.php");
     
?>