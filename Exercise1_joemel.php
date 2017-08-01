<?php




function Accenture()
{
	
	$companies = array("Accenture" , "Pointone", "IBM" ,);
	echo $companies[0];
	echo "<br>";


	$employee_multi = array ("Juan Lazy" => array('student_number'=> '001', 'course'=>'bsit' ),
							"Aida Dame" => array('student_number'=> '002', 'course'=>'bsit' ),
							"Merry Me<br>" => array('student_number'=> '003', 'course'=>'bscs' ),
							);

	$employee_of_the_year_Accenture = "Juan Lazy";
	
	foreach ($employee_multi as $key => $employee_name) 

	{

			if($key==$employee_of_the_year_Accenture && $employee_name!=$key)
			{

				echo $key."****<br>";

				
			}	
			else
			{
				echo $key."<br>";

			}

	}
	
	/*$employee_accent = array('Juan Lazy' , 'Aida Dame' , 'Merry Me' ); 
	echo implode("<br>",$employee_accent);
	echo "<br><br>";*/
	
}

function Pointone()
{
	$companies = array("Accenture" , "Pointone" , "IBM" ,);
	echo $companies[1];
	echo "<br>";

	$employee_multi = array ("Grace Payno" => array('student_number'=> '001', 'course'=>'bsit' ),
							"Paul Fernandez" => array('student_number'=> '002', 'course'=>'bsit' ),
							"Jed De Lumen<br>" => array('student_number'=> '003', 'course'=>'bscs' ),
							);

	$employee_of_the_year_point = "Paul Fernandez";

	foreach ($employee_multi as $key => $employee_name) 
	{

		if($key==$employee_of_the_year_point && $employee_name!=$key)

		{
			echo $key."****<br>";

		}
		else
		{
			echo $key."<br>";
		}
	}



	
	/*$employee_point = array('Grace Payno' ,'Paul Fernandez' , 'Jed De Lumen' );
	echo implode("<br>",$employee_point);
	echo "<br><br>";*/
}

function ibm()
{
	$companies = array("Accenture" , "Pointone" , "IBM" ,);
	echo $companies[2];
	echo "<br>";

	$employee_multi = array ("Maria Carry" => array('student_number'=> '001', 'course'=>'bsit' ),
							"Johnny Brave" => array('student_number'=> '002', 'course'=>'bsit' ),
							"Patrick Star<br>" => array('student_number'=> '003', 'course'=>'bscs' ),
							);

	$employee_of_the_year_ibm = "Johnny Brave";

	foreach ($employee_multi as $key => $employee_name) 
	{
		if($key==$employee_of_the_year_ibm && $employee_name!=$key)

		{

			echo $key."****<br>";
		}

		else
		{
			echo $key."<br>";
		}
	}


	
	/*$employee_ibm = array('Maria Carry' ,'Johnny Brave','Patrick Star', );
	echo implode("<br>",$employee_ibm);
	echo "<br><br>";*/
}


				
				Accenture();
				Pointone();
				ibm();






						
					
					
					
					
				
				
?>