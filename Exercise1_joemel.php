<?php




function Output()
{
	
	$companies = array("Accenture" , "Pointone", "IBM" ,);
	foreach ($companies as $key => $company_name) 
	{

		// if($key==0)
		// {
			echo $company_name;
			echo "<br>";

			$employee_multi = array (0 => array("Juan_Lazy"=> "Juan Lazy", 'Aida_Dame'=>'Aida Dame','Merry_Me'=>'Merry Me' ),
									1 => array('Grace_Payno'=> 'Grace Payno', 'Paul_Fernandez'=>'Paul Fernandez','Jed_De_Lumen'=>'Jed De Lumen' ),
									2 => array('Maria_Carry'=> 'Maria Carry', 'Johnny_Brave'=>'Johnny Brave','Patrick_Star'=>'Patrick Star' ),
									);
			$employee_of_the_year_IBM = "Johnny Brave";
			$employee_of_the_year_POINTONE = "Paul Fernandez";
			$employee_of_the_year_Accenture = "Juan Lazy";


			foreach ($employee_multi[$key] as $company_key => $employee_company)
			
			{
				// print_r($employee_company);
					if($employee_company==$employee_of_the_year_Accenture || $employee_company==$employee_of_the_year_POINTONE || $employee_company==$employee_of_the_year_IBM)
					{

						echo $employee_company."****"."<br>";

					}
					else
					{

						echo $employee_company."<br>";

					}
				

	
			}



			echo "<br>";
		// }


	}
	
}

	Output();
	






						
					
					
					
					
				
				
?>