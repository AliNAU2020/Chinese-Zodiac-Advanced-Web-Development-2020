<textarea name = "list" form= "signs"></textarea>
<form method = "POST" id = "signs">
	<input type = "submit">
</form>

<?php
/*
 * Ali Shaikh
 * NAU COMP 4342
 * Chinese Zodiac
 * 2020-03-08
 */
 
 if (isset($_POST['list'])) {
	$sorted = explode(', ', $_POST['list']);
	sort($sorted);
	echo "<ol>";
	foreach( $sorted as $sign) {
		echo "<li>$sign</li>";
	}
	echo "<ol>";
 }

?>