<!DOCTYPE html>
<html>
<head>
  
    <link href="../css/bootstrap.min.css" rel="stylesheet">
  <title>
    Kanchkura University College
  </title>
</head>
<body>


<?php
  session_start();
 include("connection.php");


    $exam=$_SESSION['exam'];
     $roll=$_REQUEST['ids'];
     $sub1=$_POST["sub1"];
     $sub2=$_POST["sub2"];
     $sub3=$_POST["sub3"];
     $sub4=$_POST["sub4"];
    $sub5=$_POST["sub5"];
   $sub6=$_POST["sub6"];
   $sub7=$_POST["sub7"];
      $val=1;

if("test"!=$exam) {

if(('0'<$sub1 && '100'>=$sub1) || (''==$sub1)){
 if(('0'<$sub2 && '100'>=$sub2) || (''==$sub2)){
    if(('0'<$sub3 && '100'>=$sub3) || (''==$sub3)){
       if(('0'<$sub4 && '100'>=$sub4) || (''==$sub4)){
        if(('0'<$sub5 && '100'>=$sub5) || (''==$sub5)){
          if(('0'<$sub6 && '100'>=$sub6) || (''==$sub6)){
            if(('0'<$sub7 && '100'>=$sub7) || (''==$sub7)){


                 if ("1st"==$exam) {
      
               mysql_query("UPDATE 1st_semester SET sub1_m='$sub1',sub2_m='$sub2',sub3_m='$sub3',sub4_m='$sub4',sub5_m='$sub5',sub6_m='$sub6',sub7_m='$sub7' WHERE  roll='$roll'") ;
  

              }elseif ("2nd"==$exam) {

               mysql_query("UPDATE 2nd_semester SET sub1_m='$sub1',sub2_m='$sub2',sub3_m='$sub3',sub4_m='$sub4',sub5_m='$sub5',sub6_m='$sub6',sub7_m='$sub7' WHERE roll=$roll") ;
     
              }elseif ("3rd"==$exam) {

              mysql_query("UPDATE year_final SET sub1_m='$sub1',sub2_m='$sub2',sub3_m='$sub3',sub4_m='$sub4',sub5_m='$sub5',sub6_m='$sub6',sub7_m='$sub7' WHERE roll='$roll'") ;
     
            }elseif ("pre-test"==$exam) {

             mysql_query("UPDATE pre_test SET sub1_m='$sub1',sub2_m='$sub2',sub3_m='$sub3',sub4_m='$sub4',sub5_m='$sub5',sub6_m='$sub6',sub7_m='$sub7' WHERE roll='$roll'") ;
            }
            header("location:result_insert.php");
    
            }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
          }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
        }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
      }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
    }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
  }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
}else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }

}elseif ("test"==$exam) { 

         $sub8=$_POST["sub8"];
      $sub9=$_POST["sub9"];
      $sub10=$_POST["sub10"];
      $sub11=$_POST["sub11"];
      $sub12=$_POST["sub12"];
      $sub13=$_POST["sub13"];


if(('0'<$sub1 && '100'>=$sub1) || (''==$sub1)){
 if(('0'<$sub2 && '100'>=$sub2) || (''==$sub2)){
    if(('0'<$sub3 && '100'>=$sub3) || (''==$sub3)){
       if(('0'<$sub4 && '100'>=$sub4) || (''==$sub4)){
        if(('0'<$sub5 && '100'>=$sub5) || (''==$sub5)){
          if(('0'<$sub6 && '100'>=$sub6) || (''==$sub6)){
            if(('0'<$sub7 && '100'>=$sub7) || (''==$sub7)){
              if(('0'<$sub8 && '100'>=$sub8) || (''==$sub8)){
                if(('0'<$sub9 && '100'>=$sub9) || (''==$sub9)){
                  if(('0'<$sub10 && '100'>=$sub10) || (''==$sub10)){
                   if(('0'<$sub11 && '100'>=$sub11) || (''==$sub11)){
                     if(('0'<$sub12 && '100'>=$sub12) || (''==$sub12)){
                       if(('0'<$sub13 && '100'>=$sub13) || (''==$sub13)){
         
                            mysql_query("UPDATE test_exam SET sub1_m='$sub1',sub2_m='$sub2',sub3_m='$sub3',sub4_m='$sub4',sub5_m='$sub5',sub6_m='$sub6',sub7_m='$sub7',sub8_m='$sub8',sub9_m='$sub9',sub10_m='$sub10',sub11_m='$sub11',sub12_m='$sub12',sub13_m='$sub13' WHERE  roll='$roll'") ;
  
                            header("location:result_insert.php");


                       }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
                    }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
                  }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
                }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
              }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
             }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
            }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
          }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
        }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
      }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
    }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
  }else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }
}else{  $m1='Invalid Marks . Please Insert Valid marks between 0-100'; $true='0'; }

}

if('0'==$true){
  echo '<br ><br ><br ><br ><br ><center><table bordercolor="black" width="auto" height="90px" style="background-color:#0cc; text-align:center;"><tr><td style="font-size:27px"><b>&nbsp;&nbsp;&nbsp;'.$m1.'&nbsp;&nbsp;&nbsp;</b></td></tr></table><br /><br /></h3>';
echo  '<a  class="btn btn-sm btn-primary"   href="javascript:history.go(-1)" title="Return to previous page"><< Back to previous page</a><br /></center>';
                   
}
 



?>

</body>
</html>