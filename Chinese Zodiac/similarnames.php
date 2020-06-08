<!DOCTYPE html>
<html>
<head>
	<title>Similar Names </title>
</head>
<body>
	<h1>Similar Names</h1><hr />
	<?php
	/*declare the $SignNames array and variables to track the smalles value from the levenshtein() function and the largest value from the similar_text() function. */
		$SignNames = array(
			"Rat",
			"Ox",
			"Tiger",
			"Rabbit",
			"Dragon",
			"Snake",
			"Horse",
			"Goat",
			"Monkey",
			"Rooster",
			"Dog",
			"Pig");
	/*Note that the levenshtein()function returns the number of differences, so a small return value indicates that the two strings are similiar, while a large return value indicates that two strings are different. */
		$LevenshteinSmallest = 999999;
	/*Note that similar_text()function returns the number of matching characters, so a small return value indicates that the two strings are different, while a large return value indicates that the two strings are similar. */
		$SimilarTextLargest = 0;
	/*for loop are designed so that each element of the array will be compared once to every other element of the array. */
		for($i=0; $i<11; ++$i){
	/*Within the inner for loop,you retrieve the value from the levenshtein()function for each pair of names and compare the returned value to the smallest value found so far. */
		  for($j=$i+1; $j<12; ++$j){
			  $LevenshteinValue =
					levenshtein($SignNames[$i],$SignNames[$j]);
	/*If the returned value is smaller, this pair of names is closer, so you store the returned value as the smallest value found so far and save the pair of names associated with that value.You then do the same thing with the similar_text()function, except that you test for the largest value. */
			  if($LevenshteinValue <
				  $LevenshteinSmallest){
				  $LevenshteinSmallest = $LevenshteinValue;
				  $LevenshteinWord1 = $SignNames[$i];
				  $LevenshteinWord2 = $SignNames[$j];
			   }
			   $SimilarTextValue = similar_text($SignNames[$i], $SignNames[$j]);
			   if($SimilarTextValue > $SimilarTextLargest){
				   $SimilarTextLargest = $SimilarTextValue;
				   $SimilarTextWord1 = $SignNames[$i];
				   $SimilarTextWord2 = $SignNames[$j];
			   }
		  }
	}
	/*display the pairs of words that the functions determined are the most similar */
	echo "<p>The levenshtein() function has determined that &quot;$LevenshteinWord1&quot; and &quot;$LevenshteinWord2&quot; are the most similar names.</p>\n";
	echo "<p>The similar_text() function has determined that &quot;$SimilarTextWord1&quot; and &quot;$SimilarTextWord2&quot; are the most similar names.</p>\n";
	?>
</body>
</html>