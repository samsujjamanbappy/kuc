<?php
session_start();
 $_SESSION['exam']=$_POST['examtype'];
  $exam=$_SESSION['exam'];
 $_SESSION['group']=$_POST['group'];
  $group=$_SESSION['group'];
   $_SESSION['batch']=$_POST['batch'];
   $batch=$_SESSION['batch'];
 header('location:view_allstudent_result.php');


?>