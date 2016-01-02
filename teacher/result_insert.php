<?php
session_start(); 
$fname=$_SESSION['fname'];

if(''!=$_SESSION['teacher']){

?>
 <?php
  $exam=$_SESSION['exam'];
     $batch=$_SESSION['batch'];
     include("connection.php"); //database connection
     $val=0;
if ("1st"==$exam) {
 $tb2='1st_semester';
$exam1="1st Semester Exam";
$paper=' 1st paper';
  $result4= mysql_query("SELECT * FROM student_info WHERE batch=$batch");
}
elseif ("2nd"==$exam) {
$paper=' 1st paper';
 $tb2='2nd_semester';
 $exam1="2nd Semester Exam";
  $result4= mysql_query("SELECT * FROM student_info WHERE batch=$batch ");
}
elseif ("3rd"==$exam) {
$exam1="Year Change Exam";
$paper=' 1st paper';
 $tb2='year_final';
  $result4= mysql_query("SELECT * FROM student_info WHERE batch=$batch ");
}
elseif ("pre-test"==$exam) {
$exam1="Pre-test Exam";
$paper='  2nd paper';

 $tb2='pre_test';
  $result4= mysql_query("SELECT * FROM student_info WHERE batch=$batch ");

}elseif ("test"==$exam) {
$exam1="Test Exam";
$exam_paper=$_POST['exam_paper'];
 $tb2='test_exam';

 if ($exam_paper=='1st_p') {
$paper='  1st paper';
$p='1';


 }elseif($exam_paper=='2nd_p'){
$paper='  2nd paper';
$p='2';

 }

  $result4= mysql_query("SELECT * FROM student_info WHERE batch=$batch ");
}


  $department=$_SESSION['department'];

        ?>  


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

      <title>Kanchkura University College</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <link href="../css/plugins/morris.css" rel="stylesheet">



</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>      

                 <strong><a class="navbar-brand">Kanchkura University College</a></strong>

            </div>
            <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $fname; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                     <li>
                            <a href="myprofile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                      <!--  <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>  -->
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
        


                    <li >
                        <a href="teacher.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>    
                     
                    <li class="active">
                        <a href="insert_grade.php"><i class="fa fa-fw fa-edit"></i> Insert Grade</a>
                    </li>

                    <li>
                        <a href="allstudent_result.php"><i class="fa fa-fw fa-desktop"></i> All Student Result</a>
                    </li>
                    <li>
                        <a href="update_allstudent_result.php"><i class="fa fa-fw fa-desktop"></i> Update Student Result</a>
                    </li>



                 </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

      


            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header alert alert-info ">
                     <i class="fa fa-fw fa-edit"></i>  <strong> Insert <?php echo $exam1;?> Result Of Batch: <?php echo $batch; echo ' ('.$department.$paper.')';?></strong>
                        </h4>

          <a href="insert_grade.php"><button type="button" class="btn btn-xs btn-default">Back</button></a><br /><br />
  <center>
  <table align="center"  class="table table-striped table-bordered table-hover">
    <tr ><td  width="16%" bgcolor="#cccccc">&nbsp;<strong> Roll no</strong></td>
      <td height="40"  bgcolor="#cccccc" width="auto"><strong>Student Name</strong></td>
      <td   width="auto"  bgcolor="#cccccc" ><strong>Group</strong></td>
       <td    bgcolor="#cccccc" width="auto"><strong><center>&nbsp;</center></strong></td>
    </tr>
<form action="submit_marks_all.php" method="post">
    <?php 

	
      while($row=mysql_fetch_array($result4)){
      $dbroll = $row['roll'];
      $name = $row['name'];
      $department1= $row['group_name'];
       $result5= mysql_query("SELECT * FROM $tb2 WHERE roll='$dbroll' ");

      while($row=mysql_fetch_array($result5)){
        $roll = $row['roll'];
      	
     if($exam!='test'){

        if('Bangla'==$department){
        $col='sub1_m'; 
        $dbsub = $row['sub1'];
        }elseif ('English'==$department) {
        $col='sub2_m'; 
        $dbsub = $row['sub2'];
        }elseif ('ICT'==$department) {
         $col='sub3_m'; 
        $dbsub = $row['sub3'];
        }
        elseif (('Physic')==$department || ('Economices')==$department || ('Logical Science')==$department  || ('Management')==$department) {
        $dbsub = $row['sub4'];
         $col='sub4_m'; 
        	}
          elseif (('Chemistry') ==$department || ('Management') ==$department || ('Civics') ==$department) {
         $col='sub5_m'; 
          $dbsub = $row['sub5'];
        }        
        elseif (('Production Management & Supply') ==$department || ('Biology') ==$department|| ('History of Islam') ==$department) {
        $dbsub = $row['sub6'];
         $col='sub6_m'; 

        }  
       elseif (('Mathematics') ==$department || ('Psychology') ==$department || ('Secraterial Science') ==$department || ('Islamic studies') ==$department) {
         $col='sub7_m'; 
        $dbsub= $row['sub7'];
        } 
}else{

        if('Bangla'==$department){

          if($p=='1'){
        $col='sub1_m'; 
        $dbsub = $row['sub1'];
      }elseif($p=='2'){
        $col='sub2_m'; 
        $dbsub = $row['sub2'];
      }
        
    
        }elseif ('English'==$department) {

         if($p=='1'){
        $col='sub3_m'; 
        $dbsub = $row['sub3'];
      }elseif($p=='2'){
        $col='sub4_m'; 
        $dbsub = $row['sub4'];
      }


       }elseif ('ICT'==$department) {

       if($p=='1'){
        $col='sub5_m'; 
        $dbsub = $row['sub5'];
      }elseif($p=='2'){
        $col='sub5_m'; 
        $dbsub = $row['sub5'];
      }

       }elseif(('Physic')==$department || ('Economices')==$department || ('Logical Science')==$department  || ('Management')==$department) {
        
         if($p=='1'){
        $col='sub6_m'; 
        $dbsub = $row['sub6'];
      }elseif($p=='2'){
        $col='sub7_m'; 
        $dbsub = $row['sub7'];
      }  
    
    }elseif (('Chemistry') ==$department || ('Management') ==$department || ('Civics') ==$department) {
        
        if($p=='1'){
        $col='sub8_m'; 
        $dbsub = $row['sub8'];
      }elseif($p=='2'){
        $col='sub9_m'; 
        $dbsub = $row['sub9'];
      } 
    
    }elseif (('Production Management & Supply') ==$department || ('Biology') ==$department|| ('History of Islam') ==$department) {
        
         if($p=='1'){
        $col='sub10_m'; 
        $dbsub = $row['sub10'];
      }elseif($p=='2'){
        $col='sub11_m'; 
        $dbsub = $row['sub11'];
      }
        
        } elseif (('Mathematics') ==$department || ('Psychology') ==$department || ('Secraterial Science') ==$department || ('Islamic studies') ==$department) {
         
         if($p=='1'){
        $col='sub12_m'; 
        $dbsub = $row['sub12'];
      }elseif($p=='2'){
        $col='sub13_m'; 
        $dbsub = $row['sub13'];
      } 
    } 
}

        if ($department==$dbsub) {
 

    ?>

    <tr> 
    <input name="col" hidden value="<?php echo $col; ?>"> 
      <input name="tb" hidden value="<?php echo $tb2;?>">

       <td style="font-size:13px" ><strong><input name="roll[]" value="<?php  echo $roll ; ?>" type="hidden"/><?php  echo $roll ; ?></strong></td> 
      <td style="font-size:12px" >&nbsp;&nbsp; <?php  echo $name ; ?> &nbsp;</td>
      <td  style="font-size:12px" >&nbsp;<?php  echo $department1; ?> </td>
         <td  width=" " style="font-size:12px" ><input placeholder="Insert Marks here" name="marks[]" type="text" /></td>
   
   <?php
  }
   }
}
   echo mysql_error();
   ?>
   
   <?php 
   mysql_close();
   ?></tr>
   <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td> <td><input type="submit" value="Submit" ></td></tr>
</form>
   
  </table>
</center>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
  </div>
       <!-- /#page-wrapper -->

        <br /><br />

<p align="center" style="color:white; font-size:12.5px;">Developed by <a href="#"> <strong> Master Minds</strong></a></p>
 <br />
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php }else{ 
    header("location:index.php"); 
} ?>