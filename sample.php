<?php
	// echo "<html>";
	echo "Hello World! <br>";
?>
<br>
<br>
<br>
-----------------
FOR LOOPS
<br>
<?php

	// for($x=4; $x <= 5 ; $x++){

	// 	echo $x . "<br>";

	// }
	echo "function calling: 	<br>";
	$output = for_loops_execute(); 
	echo $output;

?>
<br>
<br>
<br>
-----------------
FOREACH
<br>
<?php
	// $students = array('Paul','Rod','Justin'); // single line array
	// foreach($students as $key => $student_name ){
 // 		echo $key." : ".$student_name."<br>";

 // 	}
	// $students_multi = array(0 => array('student_number'=> '001', 'course'=>'bsit' ),
	// 						1 => array('student_number'=> '002', 'course'=>'bsit' ),
	// 						2 => array('student_number'=> '003', 'course'=>'bscs' ),
	// 						); // multidimensional

					//	0,1,2

	// echo "<pre>" , print_r($students_multi),"</pre>";



 	// foreach($students_multi as $key => $student_name ){

 	// 	echo $key."  student_number : ".$student_name['student_number'] ."<br>";
 	// 	echo $key."  course : ".$student_name['course'] ."<br>";


 	// }


 	$students_multi = array("Rod" => array('student_number'=> '001', 'course'=>'bsit' ),
							"Paul" => array('student_number'=> '002', 'course'=>'bsit' ),
							"Justin" => array('student_number'=> '003', 'course'=>'bscs' ),
							); // associative array

 	foreach($students_multi as $key => $student_name ){
 		echo $key."  student_number : ".$student_name['student_number'] ."<br>";
 		echo $key."  course : ".$student_name['course'] ."<br>";
 	}

 	echo "<strong>" . $students_multi["Rod"]['student_number']."</strong>";



?>


<br>
<br>
<br>
-----------------
IF ELSE

<?php
	
$students_multi = array("Rod" => array('student_number'=> '001', 'course'=>'bsit' ),
							"Paul" => array('student_number'=> '002', 'course'=>'bsit' ),
							"Justin" => array('student_number'=> '003', 'course'=>'bscs' ),
							); // associative array
	$cum_laude = "Paul";
	$course = "bsit";
	
 	foreach($students_multi as $key => $student_name ){

 		if($key == $cum_laude &&  $student_name['course'] == 'bsit'){

 			echo $key."  student_number : ".$student_name['student_number'] ." -- <strong>CUM LAUDE </strong><br>";
 		}elseif( $student_name['course'] == 'bscs'){
 			echo $key."  student_number : ".$student_name['student_number'] ." -- <strong> BSCS </strong><br>";

 		}else{
 			 echo $key."  student_number : ".$student_name['student_number'] ." <br>";

 		}

 	}


?>

// DATA TYPE 

boolean =  true or false;
string  = a-z0-9!-=+";
integer = 123456789
float = 1234.56
NULL

<?php
	

 function for_loops_execute(){
 	$return_value = "";

	for($x=4; $x <= 5 ; $x++){
		$return_value .= $x."<br>";
	}

	return $return_value;
 }

?>