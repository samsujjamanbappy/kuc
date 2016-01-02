<?php
session_start(); 
$fname=$_SESSION['fname'];

if(''!=$_SESSION['admin']){


?>

    <?php
  $exam=$_SESSION['exam'];
     $roll=$_REQUEST['ids'];
     
     include("connection.php");
?>
<?php
 if("1st"==$exam){
    $exam1="1st Semester Exam";
    $paper1=" 1st paper";
    $paper2=" 1st paper";

    $result4= mysql_query("SELECT * FROM 1st_semester WHERE roll=$roll");

    while($row=mysql_fetch_array($result4)){
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

    }
      }elseif("2nd"==$exam){
    $exam1="2nd Semester Exam";
    $paper1=" 1st paper";
    $paper2=" 1st paper";

    $result4= mysql_query("SELECT * FROM 2nd_semester WHERE roll=$roll");


    while($row=mysql_fetch_array($result4)){
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

    
      }
      }elseif("3rd"==$exam){

    $exam1="Year Change Exam";
    $paper1=" 1st paper";
    $paper2=" 1st paper";

    $result4= mysql_query("SELECT * FROM year_final WHERE roll=$roll");


    while($row=mysql_fetch_array($result4)){
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

      }
      }elseif ("pre-test"==$exam) {
      
    $exam1="Pre-test Exam";
    $paper1=" 2nd paper";
    $paper2=" 2nd paper";

    $result4= mysql_query("SELECT * FROM pre_test WHERE roll=$roll");


    while($row=mysql_fetch_array($result4)){
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

    
      }
    }elseif ("test"==$exam) {
      
    $result4= mysql_query("SELECT * FROM test_exam WHERE roll=$roll");

    $exam1="Test Exam";

    $paper1=" 1st paper";
    $paper2=" 2nd paper";

    while($row=mysql_fetch_array($result4)){
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
    $sub12= $row['sub12'];
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
    }else{
      $sub1="";$sub2="";$sub3="";$sub4="";$sub5="";$sub6="";$sub7="";
    };
    echo mysql_error();
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
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>    
                    <li>
                        <a href="allstudent.php"><i class="fa fa-fw fa-desktop"></i> All students</a>
                    </li>
                    <li>
                        <a href="allteacher.php"><i class="fa fa-fw fa-desktop"></i> All Teachers</a>
                    </li>
                    <li>
                        <a href="allstudent_result.php"><i class="fa fa-fw fa-desktop"></i> All Student Result</a>
                    </li>
                    <li>
                        <a href="insert_student.php"><i class="fa fa-fw fa-edit"></i> Insert Student</a>
                    </li>
                    <li class="active">
                        <a href="insertresult.php"><i class="fa fa-fw fa-edit"></i> Insert Result</a>
                    </li>
                    <li>
                        <a href="insert_teacher.php"><i class="fa fa-fw fa-edit"></i> Insert Teacher</a>
                    </li>
                      <li>
                        <a href="publish_result.php"><i class="fa fa-fw fa-desktop"></i> Declare Result</a>
                    </li>    
                    <li>
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
                     <i class="fa fa-fw fa-edit"></i>  <strong>  Insert Result (<?php echo $exam1; ?>)</strong>
                      </h4>


 <form action="submit_result_by_id.php?ids=<?php echo $roll;?>&exam=<?php echo $exam;?>" method="POST">
 <table width="450" align="center"  class=" table-striped table-bordered table-hover">


<tr><td height="36px"> &nbsp; Roll No: &nbsp;</td><td> <strong> &nbsp; <?php echo $roll;?></strong></td></tr>
 <tr><td>&nbsp; <?php echo $sub1.$paper1; ?>:</td><td> &nbsp;<input type="text" name="sub1" value="<?php echo $sub1_m;?>" placeholder=" Marks" autofocus/></td></tr>
<tr><td>&nbsp; <?php echo $sub2.$paper2; ?>:</td><td> &nbsp;<input type="text" name="sub2"  value="<?php echo $sub2_m;?>" placeholder=" Marks" /></td></tr>
<tr><td>&nbsp; <?php echo $sub3.$paper1; ?>:</td><td> &nbsp;<input type="text" name="sub3"  value="<?php echo $sub3_m;?>" placeholder=" Marks"/></td></tr>
<tr><td>&nbsp; <?php echo $sub4.$paper2; ?>:</td><td> &nbsp;<input type="text" name="sub4"  value="<?php echo $sub4_m;?>" placeholder=" Marks"/></td></tr>
<tr><td>&nbsp; <?php echo $sub5.$paper1; ?>:</td><td> &nbsp;<input type="text" name="sub5"  value="<?php echo $sub5_m;?>" placeholder=" Marks"/></td></tr>
<tr><td>&nbsp; <?php echo $sub6.$paper1; ?>:</td><td> &nbsp;<input type="text" name="sub6"  value="<?php echo $sub6_m;?>" placeholder=" Marks"/></td></tr>
<tr><td>&nbsp; <?php echo $sub7.$paper2; ?>:</td><td> &nbsp;<input type="text" name="sub7"  value="<?php echo $sub7_m;?>" placeholder=" Marks"/></td></tr>
<?php  if("test"==$exam){?>
<tr><td>&nbsp; <?php echo $sub8.$paper1; ?>:</td><td>&nbsp;<input type="text" name="sub8"  value="<?php echo $sub8_m;?>" placeholder=" Marks" /></td></tr>
<tr><td>&nbsp; <?php echo $sub9.$paper2; ?>:</td><td>&nbsp;<input type="text" name="sub9" value="<?php echo $sub9_m;?>" placeholder=" Marks" /></td></tr>
<tr><td>&nbsp; <?php echo $sub10.$paper1; ?>:</td><td>&nbsp;<input type="text" name="sub10" value="<?php echo $sub10_m;?>" placeholder=" Marks" /></td></tr>
<tr><td>&nbsp; <?php echo $sub11.$paper2; ?>:</td><td>&nbsp;<input type="text" name="sub11" value="<?php echo $sub11_m;?>" placeholder=" Marks" /></td> </tr>
<tr><td>&nbsp; <?php echo $sub12.$paper1; ?>:</td><td>&nbsp;<input type="text" name="sub12" value="<?php echo $sub12_m;?>" placeholder=" Marks" /></td> </tr>
<tr><td>&nbsp; <?php echo $sub13.$paper2; ?>:</td><td>&nbsp;<input type="text" name="sub13" value="<?php echo $sub13_m;?>" placeholder=" Marks" /></td></tr>
<?php }else{};?><tr><hr /><tr/>

<tr><td height="28">&nbsp; </td>  <td height="45">&nbsp;&nbsp;<input class="btn btn-sm btn-success" type="submit" value="Insert" >&nbsp;&nbsp;<input class="btn btn-sm btn-danger" type="Reset" value="Reset" ></td></tr>
</table></form>
<?php
?>  

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