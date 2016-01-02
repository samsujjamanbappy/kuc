<?php
session_start();
   $_SESSION['batch']=$_POST['batch'];
   $batch=$_SESSION['batch'];
 
 header('location:view_allstudent.php');


?>