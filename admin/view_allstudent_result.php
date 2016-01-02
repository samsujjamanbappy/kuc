<?php
session_start(); 
$fname=$_SESSION['fname'];

if(''!=$_SESSION['admin']){

?>
 <?php
  $exam=$_SESSION['exam'];
 $group=$_SESSION['group'];
     $batch=$_SESSION['batch'];
     include("connection.php");
require_once("function1.php");
     $val=0;
if ("1st"==$exam) {
$exam1="1st Semester Exam";
$tb_name='1st_semester';
  $result4= mysql_query("SELECT * FROM student_info   WHERE batch='$batch' && group_name='$group' ");
}
elseif ("2nd"==$exam) {
  $tb_name='2nd_semester';
 $exam1="2nd Semester Exam";
  $result4= mysql_query("SELECT * FROM student_info   WHERE batch='$batch' && group_name='$group' ");
}
elseif ("3rd"==$exam) {
  $tb_name='year_final';
$exam1="Year Change Exam";

  $result4= mysql_query("SELECT * FROM student_info   WHERE batch='$batch' && group_name='$group' ");
}
elseif ("pre-test"==$exam) {
  $tb_name='pre_test';
$exam1="Pre-test Exam";
  $result4= mysql_query("SELECT * FROM student_info   WHERE batch='$batch' && group_name='$group'  ");
}elseif ("test"==$exam) {
  $tb_name='test_exam';
$exam1="Test Exam";
  $result4= mysql_query("SELECT * FROM student_info   WHERE batch='$batch' && group_name='$group'  ");
}

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
                <a class="navbar-brand">Kanchkura University College</a>
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
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>    
                    <li>
                        <a href="allstudent.php"><i class="fa fa-fw fa-desktop"></i> All students</a>
                    </li>
                    <li>
                        <a href="allteacher.php"><i class="fa fa-fw fa-desktop"></i> All Teachers</a>
                    </li>
                    <li class="active">
                        <a href="allstudent_result.php"><i class="fa fa-fw fa-desktop"></i> All Student Result</a>
                    </li>
                    <li>
                        <a href="insert_student.php"><i class="fa fa-fw fa-edit"></i> Insert Student</a>
                    </li>
                    <li>
                        <a href="insertresult.php"><i class="fa fa-fw fa-edit"></i> Insert Result</a>
                    </li>
                    <li>
                        <a href="insert_teacher.php"><i class="fa fa-fw fa-edit"></i> Insert Teacher</a>
                    </li>
                      <li>
                        <a href="publish_result.php"><i class="fa fa-fw fa-desktop"></i> Declare Result</a>
                    </li>    
                    <li >
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Insert More Info <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="insert_batch.php"><i class="fa fa-fw fa-edit"></i>  Insert Batch</a>
                            </li>
                            <li>
                                <a href="assign_batch.php"><i class="fa fa-fw fa-edit"></i>  Assign Batch</a>
                            </li>


                        </ul>
                    </li>                     
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-edit"></i> Veiw More Info <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="view_all_batch.php"><i class="fa fa-fw fa-edit"></i> View all  Batch</a>
                            </li>
                        </ul>
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
                     <i class="fa fa-fw fa-edit"></i>  <strong>  <?php echo $exam1;?> Of Batch: <?php echo $batch .' ('.$group.')'; ?></strong>  </h4>
      <a align='right' href="allstudent_result.php" class="btn btn-default btn-sm"  > Back </a>            
<br /><br />  <center>
  <table   class="table table-striped table-bordered table-hover"  height="40" >
    <tr ><td  width="16%" bgcolor="#FF9900">&nbsp;<strong> Roll no</strong></td>
      <td height="40" bgcolor="#FF9900" width="auto"><strong> &nbsp;Student Name</strong></td>
      <td   width="auto" bgcolor="#FF9900" ><strong>Group</strong></td>
       <td   bgcolor="#FF9900"  width="auto"><strong><center> GPA</center></strong></td> 
       <td   bgcolor="#FF9900"  width="auto"> <strong><center>Grade</center></strong></td>
       <td   bgcolor="#FF9900"  width="auto"> <strong><center>Status</center></strong></td>
    <td   bgcolor="#FF9900"  width="10%"> <strong><center>&nbsp;</center></strong></td>
         </tr>
<?php 

while($row=mysql_fetch_array($result4)){
$id = $row['roll'];
$name = $row['name'];
$department= $row['group_name'];



$result5= mysql_query("SELECT * FROM $tb_name   WHERE roll=$id");


if ("test"!=$exam) {
while($row=mysql_fetch_array($result5)){

    $sub1_m = $row['sub1_m'];
    $sub2_m = $row['sub2_m'];
    $sub3_m = $row['sub3_m'];
    $sub4_m = $row['sub4_m'];
    $sub5_m = $row['sub5_m'];
    $sub6_m = $row['sub6_m'];
    $sub7_m = $row['sub7_m'];


 $pass='40';


if($pass<=$sub1_m){
  if($pass<=$sub2_m){
    if($pass<=$sub3_m){
      if($pass<=$sub4_m){
        if($pass<=$sub5_m){
           if($pass<=$sub6_m){
              
                $gr_sub7=check_grade_point($sub7_m);
                if($gr_sub7>'2'){
                  $g_sub=$gr_sub7-'2';
                }else{

                  $g_sub='0.00';
                }                   
                $gpa1=(check_grade_point($sub1_m)+check_grade_point($sub2_m)+check_grade_point($sub3_m)+check_grade_point($sub4_m)+check_grade_point($sub5_m)+check_grade_point($sub6_m)+$g_sub)/6;
         if ('5'<=$gpa1) {

          $gpa=5;
           

         }else{

          $gpa=$gpa1;

         }


          }else{ $gpa='0.00';}
        }else{ $gpa='0.00';}
      }else{ $gpa='0.00';}
    }else{ $gpa='0.00';}
  }else{ $gpa='0.00';}
}else{ $gpa='0.00';}

}
}else{
  while($row=mysql_fetch_array($result5)){

      $sub1 = $row['sub1'];
    $sub2 = $row['sub2'];
    $sub3 = $row['sub3'];
    $sub4 = $row['sub4'];
    $sub5 = $row['sub5'];
    $sub6 = $row['sub6'];
    $sub7 = $row['sub7'];
    $sub8 = $row['sub8'];
    $sub9 = $row['sub9'];
    $sub10 = $row['sub10'];
    $sub11 = $row['sub11'];
    $sub12 = $row['sub12'];
    $sub13 = $row['sub13'];
    $sub1_m = $row['sub1_m'];
    $sub2_m = $row['sub2_m'];
    $sub3_m = $row['sub3_m'];
    $sub4_m = $row['sub4_m'];
    $sub5_m = $row['sub5_m'];
    $sub6_m = $row['sub6_m'];
    $sub7_m = $row['sub7_m'];  
    $sub8_m = $row['sub8_m'];
    $sub9_m = $row['sub9_m'];
    $sub10_m = $row['sub10_m'];
    $sub11_m = $row['sub11_m'];
    $sub12_m = $row['sub12_m'];
    $sub13_m = $row['sub13_m'];

}

$sub1tm=($sub1_m+$sub2_m)/2;
$sub3tm=($sub3_m+$sub4_m)/2;
$sub5tm=($sub5_m); 
$sub6tm=($sub6_m+$sub7_m)/2;
 $sub8tm=($sub8_m+$sub9_m)/2;
$sub10tm=($sub10_m+$sub11_m)/2;
 $sub12tm=($sub12_m+$sub13_m)/2;


 $pass='40';


if($pass<=$sub1tm){
  if($pass<=$sub3tm){
    if($pass<=$sub5tm){
      if($pass<=$sub6tm){
        if($pass<=$sub8tm){
           if($pass<=$sub10tm){
              if($pass<=$sub12tm){
             
                $gr_sub12=check_grade_point($sub12tm);
                if($gr_sub12>'2'){
                  $g_sub=$gr_sub12-'2';
                }else{

                  $g_sub='0.00';
                }                   
                $gpa1=(check_grade_point($sub1tm)+check_grade_point($sub3tm)+check_grade_point($sub5tm)+check_grade_point($sub6tm)+check_grade_point($sub8tm)+check_grade_point($sub10tm)+$g_sub)/6;
         if ('5'<=$gpa1) {

          $gpa=5;
           

         }else{

          $gpa=$gpa1;

         }


            }else{ $gpa=' ';}
          }else{ $gpa=' ';}
        }else{ $gpa=' ';}
      }else{ $gpa=' ';}
    }else{ $gpa=' ';}
  }else{ $gpa=' ';}
}else{ $gpa=' ';}
}
?>
    <tr>   <td height="auto" style="font-size:14px; text-align: center;" ><b>    <?php  echo $id ; ?> </b>&nbsp;</td> 
      <td style="font-size:12px" >&nbsp;&nbsp; <?php  echo $name ; ?> &nbsp;</td>
      <td width="auto" style="font-size:12px" >&nbsp;<?php  echo $department; ?> </td>
      <td width="auto" align="center" style="font-size:13px" >&nbsp;<?php  echo '<strong>'.round($gpa,2).'</strong>'; ?> </td>
      <td width="auto" align="center" style="font-size:14px" >&nbsp;<?php  echo '<strong>'.check_gpa($gpa).'</strong>'; ?> </td>
      <?php if($gpa>0){ ?>
      <td width="auto" align="center" style="font-size:13px;color:green;" >&nbsp;<?php echo '<strong> Pass</strong>'; ?> </td>
      <?php }else{ ?>
      <td width="auto" align="center"  style="font-size:13px;color:#F00;" >&nbsp;<strong>Fail</strong></td>
<?php } ?>
    <td  width="auto"> <a href="result.php?id=<?php echo $id; ?>&&exam=<?php echo $_SESSION['exam']; ?>"><button type="button" class="btn btn-xs btn-primary">Details</button></td> <?php } ?>


   </tr>
  </table>
</center><br /><br />

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
<?php 
}else{ 
    header("location:index.php"); 
} ?>