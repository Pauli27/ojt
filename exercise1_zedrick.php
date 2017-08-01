<?php
 echo "WELCOME <br><br><br>";
$shops = array('coffee'=>array('cappuccino'=>'cappuccino','cafe latte'=>'cafe latte','americano'=>'amerikano'),
			   'flower'=>array('roses'=>'roses','sunflower'=>'sunflower','sampaguita'=>'sampaguita'),
			   'supermarket'=> array('meats_&_fishes'=>'Meats and fishes','fruits'=>'Fruits','vegetables'=>'Vegetables'));
$category = array('food'=>'food','drinks'=>'drinks','misc.'=>'misc');

	
	
foreach($category as $key => $category_type )
{
		//print_r($category_type);
		foreach ($shops as $shop_type => $items) 
		{
			//print_r($items);
			//echo "<br><br>";
			foreach ($items as $item_key => $item_value) 
			{
				//echo $item_value;
				if( $category_type == 'food' && $item_value == 'Meats and fishes')
				{
					$output = category_food(); 
					echo "<br>";
					echo $output;
					echo " * ". $item_value." in ". $shop_type." <br>";

				}
				elseif ($category_type == 'food' && $item_value == 'Fruits') 
				{
					echo " * ". $item_value." in ". $shop_type." <br>";
				}
				elseif ($category_type == 'food' && $item_value == 'Vegetables') 
				{
					echo " * ". $item_value." in ". $shop_type." <br>";

					echo "<br>";
				}
				if( $category_type == 'drinks' && $item_value == 'cappuccino')
				{
					$output = category_drinks(); 
					echo "<br>";
					echo $output;
					echo " * ". $item_value." in ". $shop_type." shop<br>";
				}
				elseif( $category_type == 'drinks' && $item_value == 'cafe latte')
				{
					echo " * ". $item_value." in ". $shop_type." shop<br>";
				}
				elseif( $category_type == 'drinks' && $item_value == 'amerikano')
				{
					echo " * ". $item_value." in ". $shop_type." shop<br>";
					echo "<br>";
				}
				if( $category_type == 'misc' && $item_value == 'roses')
				{
					$output = category_Mics(); 
					echo "<br>";
					echo $output;
					echo " * ". $item_value." in ". $shop_type." shop<br>";
				}
				elseif( $category_type == 'misc' && $item_value == 'sunflower')
				{
					echo " * ". $item_value." in ". $shop_type." shop<br>";
				}
				elseif( $category_type == 'misc' && $item_value == 'sampaguita')
				{
					echo " * ". $item_value." in ". $shop_type." shop<br>";
				}
			}

		}

}		

?>


<?php
function category_food()
{
$return_value = "";
echo "Food";
return $return_value;
}
function category_drinks()
{
$return_value = "";
echo "Drinks";
return $return_value;
}
function category_Mics()
{
$return_value = "";
echo "Misc";
return $return_value;
}

?>