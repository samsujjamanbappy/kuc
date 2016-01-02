<?php
session_start(); 
$fname=$_SESSION['fname'];

if(''!=$_SESSION['rollno']){

?>
<?php 
                        include("connection.php");
                        $roll=$_SESSION['rollno'];
                         $result3 = mysql_query("SELECT * FROM student_info  where roll=$roll;");
   
                         while($row = mysql_fetch_array($result3))
                         {
                             $batch=$row["batch"];
                             $password=$row["password"];
                             $stu_name=$row["name"];
                             $f_name=$row["father_name"];
                             $m_name=$row["mother_name"];
                             $gender=$row["gender"];
                             $phone=$row["phone"];
                            $dob=$row["dob"];
                             $gpa=$row["ssc_cgpa"];
                             $address=$row["address"];
                             
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <link href="css/plugins/morris.css" rel="stylesheet">



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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $roll; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li>
                            <a href="myprofile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                    <!--    <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>      

                        -->
                        
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
                                         

                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                     <li >
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-desktop"></i> Result <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">



   <li><a href="result.php?exam=1st"><i class="fa fa-fw fa-bar-chart-o"></i>  Frist Semester Exam</a> </li>
    <li  style="font-size:12px"><a href="result.php?exam=2nd"><i class="fa fa-fw fa-bar-chart-o"></i>  Second Semester Exam</a> </li>  
     <li><a href="result.php?exam=3rd"><i class="fa fa-fw fa-bar-chart-o"></i>  Year Change Exam</a> </li>
    <li><a href="result.php?exam=pre-test"><i class="fa fa-fw fa-bar-chart-o"></i>  Pre Test Exam</a> </li>
      <li><a href="result.php?exam=test"><i class="fa fa-fw fa-bar-chart-o"></i>  Test Exam</a> </li>
                    


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
                     <i class="fa fa-fw fa-edit"></i>  <strong> <?php echo $stu_name; ?> </strong>
                        </h4>

                          

 <br /><table  class="table table-striped table-bordered table-hover">


<tr><td width="190px" height="49"> Roll Number: </td><td><strong><h4 style="font-size:14px"><?php echo $roll; ?></h4></strong></td></tr>

<tr><td height="49"> Batch: </td><td><strong><h4 style="font-size:14px"><?php echo $batch; ?></h4></strong></td></tr>

<tr> <td height="52"> Student Name : </td><td><strong><h4 style="font-size:14px"><?php echo $stu_name; ?></h4></strong></td></tr>

<tr><td height="46">Fathers name: </td><td><strong><h4 style="font-size:14px"><?php echo $f_name; ?></h4></strong></td></tr>
 
<tr><td height="44">Mothers name:</td><td><strong><h4 style="font-size:14px"><?php echo $m_name; ?></h4></strong></td></tr>

<tr><td height="42">Gender:</td><td><strong><h4 style="font-size:14px"><?php echo $gender; ?></h4></strong></td></tr>
 
<tr><td height="49">Parents phone number: </td><td><strong><h4 style="font-size:14px"><?php echo $phone; ?></h4></strong></td></tr>
 
<tr><td height="50" > Date of Birth:</td> <td><strong><h4 style="font-size:14px"><?php echo $dob; ?></h4></strong></td></tr>

<tr><td height="46">SSC Result ( CGPA ):</td> <td><strong><h4 style="font-size:14px"><?php echo $gpa; ?></h4></strong></td></tr>

<tr><td height="46">Address:</td><td><strong><h4 style="font-size:14px"><?php echo $address; ?></h4></strong> </td></tr>
    
 </table>
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