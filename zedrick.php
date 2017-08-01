<?php
$shops = array('coffee'=>
					array('cappuccino','cafe latte','americano'),
			   'flower' =>array('roses','sunflower','sampaguita'),
			   'supermarket' => array('meats & fishes','fruits','vegetables'));

$category = array('food','drinks','misc.');

echo process_list($category,$shops);

function process_list($category,$shops){
	$output = "";
	foreach($category as $cat){
		$output .=  ucwords($cat)	."<br>";
		foreach($shops as $store=>$shop){
			echo $store;
			if($store == 'supermarket'){
				$concat = "  <br>";
			}else{
				$concat = " shop <br>";
			}

			foreach($shop as $items){
				if($cat == 'food' && ($items == 'meats & fishes' || $items == 'fruits' || $items == 'vegetables')){
					$output .= "* $items in ".$store.$concat;
				}elseif($cat == 'drinks' && ($items == 'cappuccino' || $items == 'cafe latte' || $items == 'americano')){
					$output .= "* $items in ".$store.$concat;
				}elseif($cat == 'misc.' && ($items == 'roses' || $items == 'sunflower' || $items == 'sampaguita')){
					$output .= "* $items in ".$store.$concat;
				}
			}
		}
	}

	return $output;
	
}
?>