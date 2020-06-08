<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
http://www.w3.org/TR/xhtmll/DTD/xhtml-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chinese Zodiac for Loop</title>
<link rel= "stylesheet" type = "text/css" href = "ChineseZodiac.css">
<meta http-equiv = "content-type" content = "text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Chinese Zodiac for Loop </h1>
<?php?
$img = array("dog.jpg","dragon.jpg","horse.jpg","monkey.jpg","ox.jpg","pig.jpg","rabbit.jpg","rat.jpg","rooster.jpg","sheep.jpg","snake.jpg","tiger.jpg");
echo "<table>";
echo "<tr>";
for ($i=0; $i<12; ++$i) {
echo "<th>";
echo' "<img src = .$images[$i]. "> ';
}

for ($i=1912; $i<2020; ++$i){
echo "<td>.$i.</td>";

}

?>
</body>
</html>
