    
<?php 

session_start();
$roll=$_SESSION['rollno'];

if(''==$roll){ ?>
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
                <a class="navbar-brand"> Kanchkura University College</a>
            </div>
            <!-- Top Menu Items -->
         <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                   
                      
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-user"></i> Log in</a>
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
                        <h4 class="page-header alert alert-info">
                            Log in Area ....
                        </h4>

<br /><br />
                          <table   width="400px" align="" style="" class="  table-striped table-bordered table-hover">
                             <form action="check_student.php" method="post">
                                     
                                            <tr>
                                                <td width="120px" height="37"> &nbsp; Roll Number:</td>
                                              <td width="260px">&nbsp;<input type="text" name="roll" required ></td>
                                            </tr>
                                            <tr>
                                                <td height="44">&nbsp; Password:</td>
                                              <td>&nbsp;<input type="password" name="pass" required ></td>
                                            </tr>
                                             <tr>
                                                <td height="72">&nbsp;</td>
                                               <td>&nbsp;<input class="btn btn-success" type="submit" value="Submit" >&nbsp;&nbsp;<input class="btn btn-danger" type="Reset" value="Reset" ></td>
                                            </tr>
                        </table>
                        <br /><br /><br />

                    </div>
                </div>
                <!-- /.row -->

      




            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->  <br /><br />
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

}else{

   $id=$_SESSION['rollno'];


    ?><!DOCTYPE html>

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
	
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $roll; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li>
                            <a href="myprofile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                      <!--  <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
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
                   
                                          

                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-desktop"></i> Result <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">



   <li><a href="result.php?exam=1st"><i class="fa fa-fw fa-bar-chart-o"></i>  Frist Semester Exam</a> </li>
    <li  style="font-size:12px"><a href="result.php?exam=2nd"><i class="fa fa-fw fa-bar-chart-o"></i>  Second Semester Exam</a> </li>  
     <li><a href="result.php?exam=3rd"><i class="fa fa-fw fa-bar-chart-o"></i>  Year Change Exam</a> </li>
    <li><a href="result.php?exam=pre-test"><i class="fa fa-fw fa-bar-chart-o"></i>  Pre Test Exam</a> </li>
      <li><a href="result.php?exam=test"><i class="fa fa-fw fa-bar-chart-o"></i>  Test Exam</a> </li>
                    

        

                   

                 </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Homepage
                            <small></small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

                    <h3>Welcome to Student Panel</h3>

  <br /><br />  <br />
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
<?php } ?>