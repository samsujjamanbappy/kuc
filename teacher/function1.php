<?php 

include('connection.php');


 function check_grade($checker){

if(($checker>='80')&&($checker<='100')){
	$grade='A+';	
	}
elseif(($checker>='70')&&($checker<='80')){
	$grade='A';	
	}
elseif(($checker>='60')&&($checker<'70')){
	$grade='A-';	
	}
elseif(($checker>='50')&&($checker<'60')){
	$grade='B';	
	}
elseif(($checker>='40')&&($checker<'50')){
	$grade='C';	
	}
 else {
 	$grade='F';}

 return $grade;
 }	




 
  function check_gpa($checker){
  if($checker>='5.0'){
	$grade='A+';	
	}
elseif(($checker>='4.00')&&($checker<'5.00')){
	$grade='A';	
	}
elseif(($checker>='3.50')&&($checker<'4.00')){
	$grade='A-';	
	} 
	elseif(($checker>='3.00')&&($checker<'3.50')){
	$grade='B';	
	} 
	elseif(($checker>='2.00')&&($checker<'3.00')){
	$grade='C';	
	} 
	elseif(($checker>='1.00')&&($checker<'2.00')){
	$grade='D';	
	} else{ $grade='F';}
	
	return $grade; }






 function check_grade_point($checker){

if(($checker>='80')&&($checker<='100')){
	$grade='5.00';	
	}
elseif(($checker>='70')&&($checker<'80')){
	$grade='4.00';	
	}
elseif(($checker>='60')&&($checker<'70')){
	$grade='3.50';	
	}
elseif(($checker>='50')&&($checker<'60')){
	$grade='3.00';	
	}
elseif(($checker>='40')&&($checker<='50')){
	$grade='2.00';	
	}
 else {$grade='0';}

 return $grade;
 }	
 




 ?>	    		