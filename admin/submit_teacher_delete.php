<?php
  session_start();

      $id=$_REQUEST['sdi'];

     include("connection.php");
     
     mysql_query("DELETE FROM login WHERE id=$id");


 header("location:allteacher.php");
     
?>