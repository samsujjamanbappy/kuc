<?php
session_start(); 
$fname=$_SESSION['fname'];

if(''!=$_SESSION['admin']){

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
                    <li class="active">
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
                    <li>
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
                     <i class="fa fa-fw fa-edit"></i>  <strong>  Editing on "<?php echo $_REQUEST['ids'];?>"</strong>
                        </h4>
                        <?php 
                        include("connection.php");
                        $roll=$_REQUEST['ids'];
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

 <table  class="table table-striped table-bordered table-hover">

<form method="post" action="update_student_info.php">

<tr><td height="49"> Roll Number: </td><td> <input name="roll" type="text" readonly="id" value="<?php echo $roll; ?>" size="30"></td></tr>

<tr><td height="49"> Batch: </td><td> <input name="batch" type="text" value="<?php echo $batch; ?>"  size="30"></td></tr>

<tr> <td height="49"> Password: </td><td><input name="password" type="text" value="<?php echo $password; ?>"   size="35"></td></tr>

<tr> <td height="52"> Student Name : </td><td><input  required name="name" type="text" value="<?php echo $stu_name; ?>"  size="50"></td></tr>

<tr><td height="46">Fathers name: </td><td><input name="fname" type="text" value="<?php echo $f_name; ?>"  size="50"></td></tr>
 
<tr><td height="44">Mothers name:</td><td><input name="mname" type="text" value="<?php echo $m_name; ?>"  size="50"></td></tr>

<tr><td height="42">Gender:</td><td><input  required name="gender" type="text" value="<?php echo $gender; ?>"   size="50"></td></tr>
 
<tr><td height="49">Parents phone number: </td><td><input name="phone" type="text" value="<?php echo $phone; ?>"  size="50"></td></tr>
 
<tr><td height="50" > Date of Birth:</td> <td><input  required name="dob" type="text" value="<?php echo $dob; ?>"   size="50"></td></tr>

<tr><td height="46">SSC Result ( CGPA ):</td> <td><input  required name="cgpa" type="text" value="<?php echo $gpa; ?>"  size="50"></td></tr>


<tr><td height="46">Address:</td><td><input  required name="address" size="50" cols="6" value="<?php echo $address; ?>" ></td></tr>
 <tr>
       <td height="55">&nbsp;</td>
       <td>&nbsp;<input class="btn btn-success" type="submit" value="Update" >&nbsp;&nbsp;<input class="btn btn-danger" type="Reset" value="Reset" ></td>
</tr>
 </form>    
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