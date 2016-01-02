<?php
session_start(); 
$fname=$_SESSION['fname'];

if(''!=$_SESSION['admin']){

?>
 <?php
  $exam=$_SESSION['exam'];
     $batch=$_SESSION['batch'];
       $group=$_SESSION['group'];
 
     include("connection.php");
     $val=0;
if ("1st"==$exam) {
$exam1="1st Semester Exam";
  $result4= mysql_query("SELECT * FROM student_info WHERE batch='$batch' && group_name='$group'");
}
elseif ("2nd"==$exam) {
 $exam1="2nd Semester Exam";
  $result4= mysql_query("SELECT * FROM student_info WHERE batch='$batch' && group_name='$group'");
}
elseif ("3rd"==$exam) {
$exam1="Year Change Exam";

  $result4= mysql_query("SELECT * FROM student_info WHERE batch='$batch' && group_name='$group'");
}
elseif ("pre-test"==$exam) {
$exam1="Pre-test Exam";
  $result4= mysql_query("SELECT * FROM student_info WHERE  batch='$batch' && group_name='$group'");
}elseif ("test"==$exam) {
$exam1="Test Exam";

  $result4= mysql_query("SELECT * FROM student_info WHERE  batch='$batch' && group_name='$group'");
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
                     <i class="fa fa-fw fa-edit"></i>  <strong>  <?php echo $exam1;?> Of Batch: <?php echo $batch;?> (<?php echo $group;?>)</strong>
                        </h4>

          <a href="insertresult.php"><button type="button" class="btn btn-xs btn-default">Back</button></a><br /><br />
  <center>
  <table align="center"  class="table table-striped table-bordered table-hover">
    <tr ><td  width="16%" bgcolor="#cccccc">&nbsp;<strong> Roll no</strong></td>
      <td height="40"  bgcolor="#cccccc" width="auto"><strong>Student Name</strong></td>
      <td   width="auto"  bgcolor="#cccccc" ><strong>Group</strong></td>
       <td    bgcolor="#cccccc" width="auto"><strong><center>&nbsp;</center></strong></td>
    </tr>

    <?php 
      while($row=mysql_fetch_array($result4)){
      $roll = $row['roll'];
      $name = $row['name'];
      $department= $row['group_name'];

    ?>
    <tr>   <td style="font-size:13px" >&nbsp;&nbsp;<strong><?php  echo $roll ; ?></strong></td> 
      <td style="font-size:12px" >&nbsp;&nbsp; <?php  echo $name ; ?> &nbsp;</td>
      <td  style="font-size:12px" >&nbsp;<?php  echo $department; ?> </td>
         <td  style="font-size:12px" width="auto" >&nbsp; <?php echo "<a href=\"result_insert_by_id.php?ids=$roll\">"?><input  class="btn btn-xs btn-primary" type="submit" value="Add Result" /></td>
   
   <?php
   }
   mysql_close();
   ?></tr>

   
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