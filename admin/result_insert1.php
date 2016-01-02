<?php
session_start();
 $_SESSION['exam']=$_POST['examtype'];
  $exam=$_SESSION['exam'];
   
   $_SESSION['batch']=$_POST['batch'];
   $batch=$_SESSION['batch'];
    
    $_SESSION['group']=$_POST['group'];
   $group=$_SESSION['group'];
 
 header('location:result_insert.php');


?>