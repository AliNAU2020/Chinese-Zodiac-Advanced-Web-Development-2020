<?php

	$banner_array = array(
		"Images/banner1.jpg",
		"Images/banner2.jpg",
		"Images/banner3.jpg",
		"Images/banner4.jpg",
		"Images/banner5.jpg");
	$banner_count = count($banner_array);
	
    if (empty($_COOKIE["lastbanner"])){
		//generate a random index greater than or equal
		//to 0, and less than the number of elements in
		//the $banner_array array
		$banner_index = rand(0, $banner_count-1);
	}
	else{
		//assin the cookie value to the $banner_index
		//variable
		$banner_index = $_COOKIE["lastbanner"];
		//increment the banner index, and use the modulus
		//operator to ensure that the index is greater
		//than or equal to 0, and less than the number
		//of elements in the $banner_array array
		$banner_index = (++$banner_index) % $banner_count;
	}
	
	//set or update the cookie value
	setcookie("lastbanner", $banner_index, time()+(60*60*24*7));
	
?>
