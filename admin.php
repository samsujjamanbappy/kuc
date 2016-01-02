

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
                           Admin Panel log in area....
                        </h4>

<br /><br />
                          <table   width="400px" align="" style="" class="  table-striped table-bordered table-hover">
                             <form action="check_login.php" method="post">
                                     
                                            <tr>
                                                <td width="120px" height="37"> &nbsp; Username:</td>
                                              <td width="260px">&nbsp;<input type="text" name="username" required ></td>
                                            </tr>
                                            <tr>
                                                <td height="44">&nbsp; Password:</td>
                                              <td>&nbsp;<input type="password" name="password" required ></td>
                                            </tr>

                                                <td height="43">&nbsp;  Your type:</td>
                                                <td> &nbsp; <select  name="type" >
                                                    <option selected value="" >Select one ...</option>
                                                    <option value="teacher" >Teacher </option>
                                                    <option value="admin" >Admin </option></select><br /></td>
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