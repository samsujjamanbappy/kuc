<?php
session_start(); 

 include('connection.php');

$fname=$_SESSION['fname'];

if(''!=$_SESSION['teacher']){

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
                     
                    <li>
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
                           <br /><br /><br />   <br /><br /><br />   <br />

               

<?php

$dep= $_POST['col'];
$tb = $_POST['tb'];

foreach($_POST['roll'] as $key=>$value)
{
	$roll = $value;
	$mark = $_POST['marks'][$key];
if(('0'<$mark && '100'>=$mark) || (''==$mark)){

	mysql_query("update $tb SET $dep='$mark' WHERE roll='$roll'");
	$m2=' Successfully submitted result for '.$roll; 
 
  echo ' <br /><center><table bordercolor="black" width="auto" height="40px" style="background-color:#0cc; text-align:center;"><tr><td style="font-size:13px"><b>&nbsp;&nbsp;&nbsp;'.$m2.'&nbsp;&nbsp;&nbsp;</b></td></tr></table></h3>';

}else{ 

 $m1='Invalid Marks for '.$roll.' . Please Insert Valid marks between 0-100'; 
 
  echo ' <br /><center><table bordercolor="black" width="auto" height="40px" style="background-color:#0cc; text-align:center;"><tr><td style="font-size:13px"><b>&nbsp;&nbsp;&nbsp;'.$m1.'&nbsp;&nbsp;&nbsp;</b></td></tr></table></h3>';

  
}
 
}

echo  '<center><br /><br/><a  class="btn btn-sm btn-primary"   href="update_allstudent_result.php" title="Update result page"><< Go to Update page to update result</a><br /></center>';

?>
   <br /><br /><br />   <br /><br /><br />   <br /><br /><br /> <br /><br /><br />

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

</html> <?php
 }else{ 
    header("location:index.php"); 
} ?>