<?php

 include('connection.php');

$teacher = $_POST['teacher'];

$batch = $_POST['batch'];

            
           mysql_query("INSERT INTO section_teacher(teacher_id,batch) VALUES('$teacher','$batch')");
           
        header('location:assign_batch.php');

 ?>