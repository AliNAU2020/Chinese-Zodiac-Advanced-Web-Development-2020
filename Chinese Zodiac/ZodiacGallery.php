<?php
/*
 *Ali Shaikh
 *NAU COMP 4342
 *Chinese Zodiac
 *2020-03-08
*/

$signs = array(
	"Images/rat.jpg" => "rat",
	"Images/ox.jpg" => "ox",
	"Images/tiger.jpg" => "tiger",
	"Images/rabbit.jpg" => "rabbit",
	"Images/dragon.jpg" => "dragon",
	"Images/snake.jpg" => "snake",
	"Images/horse.jpg" => "horse",
	"Images/sheep.jpg" => "sheep",
	"Images/monkey.jpg" => "monkey",
	"Images/rooster.jpg" => "rooster",
	"Images/dog.jpg" => "dog",
	"Images/pig.jpg" => "pig"
);

foreach ($signs as $image => $caption ) {
	$size = getimagesize ("Images/$image");
	
	echo '<a href = "Images/'.$image.'"><img src = "Images/'.$image.'" alt =" '.$caption. '" height = "75" width = "75"></a>';
}

?>