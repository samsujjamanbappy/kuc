<?php
session_start(); 

 include('connection.php');
 require('function.php');

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
                    <li class="active">
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
                     <i class="fa fa-fw fa-edit"></i>  <strong>  Select subject for "<?php echo $_POST['name']; ?>" </strong>
                        </h4>

<?php 

$group=$_POST['group'];

$_SESSION['roll'] = $_POST['roll'];

$roll =$_SESSION['roll'] ;

$password = $_POST['password']; 

$batch = $_POST['batch'];

$name = $_POST['name'];

$fname = $_POST['fname'];   

$mname =$_POST['mname'];    

$gender = $_POST['gender']; 

$phone =$_POST['phone'];

$dob = $_POST['dob'];   

$address =$_POST['address'];    
 
$cgpa = $_POST['cgpa']; 


$result7= mysql_query("SELECT * FROM batch where batch='$batch'");

while($row=mysql_fetch_array($result7)){
$total_s=$row['total_student'];
}
$total_student=$total_s+1;

            
            $in=mysql_query("INSERT INTO student_info(group_name, roll ,password, name, father_name, mother_name, gender, phone,ssc_cgpa ,dob, address, batch) 
                                        VALUES('$group','$roll','$password','$name','$fname','$mname','$gender','$phone','$cgpa','$dob','$address','$batch')");
            if ($in==true) {

 
 mysql_query("update batch SET total_student=$total_student where batch=$batch");      }else {   };

            
      

 ?>

<form action="submit_subject_student.php" method="POST" > 
<table align="center" width="500px" class=" table-striped table-bordered table-hover">
<tr >
  <td width="190" height="35" >&nbsp;Main Subject</td>
  <td width="310"  height="35">  &nbsp;<input name="sub1" type="radio" Value="Bangla" checked="checked" selected > Bangla </td></tr>
<tr ><td  height="35">&nbsp;Main Subject</td><td> &nbsp;<input name="sub2" type="radio" Value="English" checked="checked" selected > English </td></tr>
<tr >
  <td  height="35"> &nbsp;Main Subject</td><td>&nbsp;<input name="sub3" type="radio" Value="ICT"  checked="checked" selected > ICT </td></tr>
<?php echo group_sub($group);
  ?>

<br />
<tr><td  height="35"></td><td><br /><p>
 &nbsp; <input type="Submit" Value="Submit">
    </p></td></tr></table>
</form>

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

</html> <?php
 }else{ 
    header("location:index.php"); 
} ?>