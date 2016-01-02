
<?php

$id2=$_REQUEST['id'];
$status=$_POST['status'];
$message=$_POST['message'];



include("connection.php");


        mysql_query("update result_publish SET status= '$status', message='$message' WHERE id='$id2'");


        function goback()
{
    header("Location:publish_result.php");
    exit;
}

goback();       

        ?>