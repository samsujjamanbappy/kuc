<?php
session_start();
session_unset('$id');
header("location:../admin.php");
?>

