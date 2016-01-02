<?php
session_start(); 
$fname=$_SESSION['fname'];

if(''!=$_SESSION['admin']){

$batch=$_SESSION['batch'];
$exam=$_REQUEST['exam'];
$roll=$_REQUEST['id'];
require_once("function1.php");
include_once("connection.php");


if($exam!=''){
if('1st'==$exam){
    $full_name='First Semester Exam';


    $result5= mysql_query("SELECT * FROM 1st_semester WHERE roll=$roll");


    while($row=mysql_fetch_array($result5)){
    $sub1 = $row['sub1'];
    $sub2 = $row['sub2'];
    $sub3 = $row['sub3'];
    $sub4 = $row['sub4'];
    $sub5 = $row['sub5'];
    $sub6 = $row['sub6'];
    $sub7 = $row['sub7'];
    $sub1_m = $row['sub1_m'];
    $sub2_m = $row['sub2_m'];
    $sub3_m = $row['sub3_m'];
    $sub4_m = $row['sub4_m'];
    $sub5_m = $row['sub5_m'];
    $sub6_m = $row['sub6_m'];
    $sub7_m = $row['sub7_m'];
    $p=' 1st Paper';
      }
      $t='0'; 
      $ok='1';


}

if('2nd'==$exam){

    $full_name='Second Semester Exam';

    $result5= mysql_query("SELECT * FROM 2nd_semester WHERE roll=$roll");


    while($row=mysql_fetch_array($result5)){
       $sub1 = $row['sub1'];
    $sub2 = $row['sub2'];
    $sub3 = $row['sub3'];
    $sub4 = $row['sub4'];
    $sub5 = $row['sub5'];
    $sub6 = $row['sub6'];
    $sub7 = $row['sub7'];
    $sub1_m = $row['sub1_m'];
    $sub2_m = $row['sub2_m'];
    $sub3_m = $row['sub3_m'];
    $sub4_m = $row['sub4_m'];
    $sub5_m = $row['sub5_m'];
    $sub6_m = $row['sub6_m'];
    $sub7_m = $row['sub7_m'];
    $p=' 1st Paper';
      }
      $t='0'; 
      $ok='1';

}

if('3rd'==$exam){   

    $full_name='Year Change Exam';

     $result5= mysql_query("SELECT * FROM year_final WHERE roll=$roll");


    while($row=mysql_fetch_array($result5)){
       $sub1 = $row['sub1'];
    $sub2 = $row['sub2'];
    $sub3 = $row['sub3'];
    $sub4 = $row['sub4'];
    $sub5 = $row['sub5'];
    $sub6 = $row['sub6'];
    $sub7 = $row['sub7'];
    $sub1_m = $row['sub1_m'];
    $sub2_m = $row['sub2_m'];
    $sub3_m = $row['sub3_m'];
    $sub4_m = $row['sub4_m'];
    $sub5_m = $row['sub5_m'];
    $sub6_m = $row['sub6_m'];
    $sub7_m = $row['sub7_m'];
    $p=' 1st Paper';
      }
      $ok='1';
      $t='0'; 
   

}


if('pre-test'==$exam){
    $full_name='Pre-Test Exam';
   
    $result5= mysql_query("SELECT * FROM pre_test WHERE roll=$roll");


    while($row=mysql_fetch_array($result5)){
        $sub1 = $row['sub1'];
    $sub2 = $row['sub2'];
    $sub3 = $row['sub3'];
    $sub4 = $row['sub4'];
    $sub5 = $row['sub5'];
    $sub6 = $row['sub6'];
    $sub7 = $row['sub7'];
    $sub1_m = $row['sub1_m'];
    $sub2_m = $row['sub2_m'];
    $sub3_m = $row['sub3_m'];
    $sub4_m = $row['sub4_m'];
    $sub5_m = $row['sub5_m'];
    $sub6_m = $row['sub6_m'];
    $sub7_m = $row['sub7_m'];
    $p=' 2nd Paper';
      }
      $ok='1';
      $t='0'; 
       
}


if('test'==$exam){
    $full_name='Test Exam';

      $result5= mysql_query("SELECT * FROM test_exam WHERE roll=$roll");


    while($row=mysql_fetch_array($result5)){
        $ok='1';
        $t='1';
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
    $p=' 1st Paper';

    $p2=' 2nd Paper';
     }

} ?>



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
                        <h2 class="page-header">
                          <strong>   Roll No :<?php echo $roll;?> </strong><br />
                            <small>Batch: <strong><?php echo $batch;?></small></strong><br />
                            <small>Examination: <strong><?php echo $full_name;?></small></strong>
                        </h2>
                        
                    </div>
                </div>
                <!-- /.row -->

                     <table class="table table-bordered table-hover table-striped">
                              
                              <?php  if('1'==$ok){

                                ?><a align='right' href="view_allstudent_result.php" class="btn btn-primary"  > Back </a>&nbsp;&nbsp;&nbsp;&nbsp;<button align='right' class="btn btn-default"  onclick="JavaScript:window.print();" >Print Result</button><br /><br />

                                <?php if('test'!=$exam){

                                ?>

                                        <thead>
                                            <tr>
                                                <th width="600px">Subject Name</th>
                                                <th>Marks</th>
                                                <th>Grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo  $sub1 . $p; ?></td>
                                                <td><?php echo $sub1_m; ?></td>
                                                <td><?php echo check_grade($sub1_m); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo  $sub2. $p; ?></td>
                                                <td><?php echo $sub2_m; ?></td>
                                                <td><?php echo check_grade($sub2_m); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo  $sub3; ?></td>
                                                <td><?php echo $sub3_m; ?></td>
                                                <td><?php echo check_grade($sub3_m); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo  $sub4. $p; ?></td>
                                                <td><?php echo $sub4_m; ?></td>
                                                <td><?php echo check_grade($sub4_m); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo  $sub5. $p; ?></td>
                                                <td><?php echo $sub5_m; ?></td>
                                                <td><?php echo check_grade($sub5_m); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo  $sub6. $p; ?></td>
                                                <td><?php echo $sub6_m; ?></td>
                                                <td><?php echo check_grade($sub6_m); ?></td>
                                            </tr>
                                          <tr>
                                                <td><?php echo  $sub7. $p; ?></td>
                                                <td><?php echo $sub7_m; ?></td>
                                                <td><?php echo check_grade($sub7_m); ?></td>
                                            </tr>
<?php 
      $val=1;


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


          }else{ $gpa=' ';}
        }else{ $gpa=' ';}
      }else{ $gpa=' ';}
    }else{ $gpa=' ';}
  }else{ $gpa=' ';}
}else{ $gpa=' ';}

?>

                                           <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>        
                                                <td>&nbsp;</td>
                                         </tr>
                                           <tr>
                                                <td><?php echo  'GPA'; ?></td>
                                                <td><?php echo round($gpa,2); ?></td>
                                                <td><?php echo check_gpa($gpa); ?></td>
                                            </tr>
                                             <tr>
                                                <td><?php echo  ' Status '; ?></td>

                                               
                                               <?php 
                                                if ('F'!=check_gpa($gpa)) {
                                        
                                                $status='Pass';
                                               }else{
                                                    $status='Fail';
                                               }
                                                if($status=='Fail'){ ?>
                                                <td class="btn btn-danger">&nbsp;&nbsp;<?php echo $status; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                <?php }elseif($status=='Absent'){ ?>
                                                <td class="btn btn-warning ">&nbsp;&nbsp;<?php echo $status; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                <?php }else{ ?>
                                                <td class="btn btn-success">&nbsp;&nbsp;<?php echo $status; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                               <?php  }  ?>
                                                <td></td>
                                            </tr>

                                        </tbody>
                                <?php }else{ ?>

                                        <thead>
                                            <tr>
                                                <th width="300">Subject Name</th>
                                                <th width="160">First Paper Marks</th>
                                                <th width="190">Second Paper Marks</th>
                                                 <th width="150">Avarage Marks</th>
                                                <th width="130">Grade</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-weight:" align="center">
                                               <tr>
                                                <td align="left"><?php echo  $sub1; ?></td>
                                                <td><?php echo $sub1_m; ?></td>
                                                <td><?php echo $sub2_m; ?></td>
                                                <td><?php echo $sub1tm=($sub1_m+$sub2_m)/2; ?></td>
                                                <td><?php echo check_grade($sub1tm); ?></td>
                                            </tr>
                                               <tr>
                                                <td align="left"><?php echo  $sub3; ?></td>
                                                <td><?php echo $sub3_m; ?></td>
                                                <td><?php echo $sub4_m; ?></td>
                                                <td><?php echo $sub3tm=($sub3_m+$sub4_m)/2; ?></td>
                                                <td><?php echo check_grade($sub3tm); ?></td>
                                            </tr>
                                               <tr>
                                                <td align="left"><?php echo  $sub5; ?></td>
                                                <td><?php echo $sub5_m; ?></td>
                                                <td><?php echo '--'?></td>
                                                <td><?php echo $sub5tm=($sub5_m); ?></td>
                                                <td><?php echo check_grade($sub5tm); ?></td>
                                            </tr>
                                               <tr>
                                                <td align="left"><?php echo  $sub6; ?></td>
                                                <td><?php echo $sub6_m; ?></td>
                                                <td><?php echo $sub7_m; ?></td>
                                                <td><?php echo $sub6tm=($sub6_m+$sub7_m)/2; ?></td>
                                                <td><?php echo check_grade($sub6tm); ?></td>
                                            </tr>
                                               <tr>
                                                <td align="left"><?php echo  $sub8; ?></td>
                                                <td><?php echo $sub8_m; ?></td>
                                                <td><?php echo $sub9_m; ?></td>
                                                <td><?php echo $sub8tm=($sub8_m+$sub9_m)/2; ?></td>
                                                <td><?php echo check_grade($sub8tm); ?></td>
                                            </tr>
                                               <tr>
                                                <td align="left"><?php echo  $sub10; ?></td>
                                                <td><?php echo $sub10_m; ?></td>
                                                <td><?php echo $sub11_m; ?></td>
                                                <td><?php echo $sub10tm=($sub10_m+$sub11_m)/2; ?></td>
                                                <td><?php echo check_grade($sub10tm); ?></td>
                                            </tr>
                                               <tr>
                                                <td align="left"><?php echo  $sub12; ?></td>
                                                <td><?php echo $sub12_m; ?></td>
                                                <td><?php echo $sub13_m; ?></td>
                                                <td><?php echo $sub12tm=($sub12_m+$sub13_m)/2; ?></td>
                                                <td><?php echo check_grade($sub12tm); ?></td>
                                            </tr>

                            <?php 
      $val=1;


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

?>

                                           <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>        
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>        
                                                <td>&nbsp;</td>
                                         </tr>
                                           <tr>
                                                <td align="left"><?php echo  'GPA'; ?></td>
                                                <td><?php echo round($gpa,2); ?></td>
                                                <td>&nbsp;</td>       
                                                <td align="left">&nbsp;Total Grade:</td>
                                                <td><?php echo check_gpa($gpa); ?></td>
                                            </tr>
                                             <tr  height="48" style="font-weight:bold;">
                                                <td align="left"><?php echo  ' Status '; ?></td>
                                               
                                               <?php
                                              if ('F'!=check_gpa($gpa)) {
                                                $status='Pass';
                                               }else{
                                                    $status='Fail';
                                               }
                                                if($status=='Fail'){ ?>
                                                <td class="btn btn-danger" height="44">&nbsp;&nbsp;<?php echo $status; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                <?php }elseif($status=='Absent'){ ?>
                                                <td class="btn btn-warning ">&nbsp;&nbsp;<?php echo $status; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                <?php }else{ ?>
                                                <td class="btn btn-success">&nbsp;&nbsp;<?php echo $status; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                               <?php  }  ?>
                                                <td></td>
                                                <td>&nbsp;</td>        
                                                <td>&nbsp;</td>
                                            </tr>

                                        </tbody>
                                             <?php } ?>
                                    </table>
<?php } ?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper --><br />
<p align="center" style="color:white; font-size:12.5px;">Developed by <a href="#"> <strong> Master Minds</strong></a></p>

 </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php 
}
}else{ header("refresh:1; index.php");} 

?>
