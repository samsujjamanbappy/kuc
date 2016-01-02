<?php
session_start(); 
$fname=$_SESSION['fname'];

if(''!=$_SESSION['teacher']){
include("connection.php");
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
                     
                    <li  class="active">
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
                     <i class="fa fa-fw fa-edit"></i>  <strong>  Insert Grade </strong>
                        </h4>

                        <center> <form action="result_insert1.php" method="post">
                             <table width="450"  class=" table-striped table-bordered table-hover">
     
                                <tr><td width="120" height="40"><strong>&nbsp;Select Exam : </strong></td><td width="160">
                                  &nbsp;<SELECT required  NAME='examtype'>
                              <OPTION VALUE=>Select one</OPTION><OPTION VALUE='1st'>Frist Semester Exam</OPTION><OPTION VALUE='2nd'>Second Semester Exam</OPTION><OPTION VALUE='3rd'>Year Change Exam</OPTION><OPTION VALUE='pre-test'>Pre-Test Exam</OPTION><OPTION VALUE='test'>Test Exam</OPTION></SELECT></td></tr>
     <tr>
       <td height="40"><strong>&nbsp;Select Batch : </strong></td><td>    
        <?php 

        $te_id=$_SESSION['te_id'];
         $result3 = mysql_query("SELECT batch FROM section_teacher where teacher_id=$te_id order by batch desc");?>
   
      &nbsp;<SELECT required  NAME=batch>
      <OPTION VALUE=>Choose
      <?php  
      while($row = mysql_fetch_array($result3))
     {
      $batch=$row["batch"];
      echo "<OPTION VALUE=\"$batch\">".$batch.'</option>';
      }


     ?> </OPTION></SELECT></td></tr>
<tr><td height="40">&nbsp;</td><td>&nbsp;<input type="submit" class="btn btn-sm btn-primary" value="Submit" /></td></tr>
     </table> </form></center>



                        <br /><br /><br />

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