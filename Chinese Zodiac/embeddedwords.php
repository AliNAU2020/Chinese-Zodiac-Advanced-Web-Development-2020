<!DOCTYPE html>
<html>
<head>
	<title>Embedded Words </title>
</head>
<body>
	<h1>Embedded Words</h1><hr />
	<?php
		//declare the $Phrases and $SignNames arrays
			$Phrases = array("Your Chinese zodiac sign tells a lot about your personality.","Embed PHP scripts within an XHTML document.");
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
		    //Add a function named BuildLetterCounts().The first statement converts all of the letters in the string to uppercase.
			function BuildLetterCounts($text){
				$text = strtoupper($text);
			/*Another statement uses the count_chars()function to create an array of the counts of 256 ASCII characters. */
				$letter_counts = count_chars($text);
			//Final statement returns the newly created array
				return $letter_counts;
			}
			
			//Add function called AContainsB()
			function AContainsB($A, $B){
			/*return value (TRUE) is set */
				$retval = TRUE;
			/*ord()function is used to get ASCII values of first and last capital letters ('A' and 'Z')*/
				$first_letter_index = ord('A');
				$last_letter_index = ord('Z');
			/*use for loop to check the counts of each uppercase letter */
				for($letter_index = $first_letter_index;
						$letter_index <= $last_letter_index'
						++$letter_index) {
					if($A[$letter_index] < $B[$letter_index]){
						$retval = FALSE;
					}
				}
			 return $retval;
			}
			/*Create a foreach loop to step through each of the phrases. */
			foreach ($Phrases as $Phrase){
			/*Use the BuildLetterCounts()function to create an array of the counts of the ASCII characters in the phrase. */
				$PhraseArray = BuildLetterCounts($Prase);
				$GoodWords = array();
				$BadWords = array();
			 }
			
			 foreach ($SignNames as $Word){
				$WordArray = BuildLetterCounts($Word);
				if(AContainsB($PhraseArray, $WordArray))
					$GoodWords[] = $Word;
				else
					$BadWords[] = $Word;
			}
			
			//display the list of words that can and cannot be made from the phrase
			echo"<p>The following words can be made from the letters in the phrase &quot;$Phrase&qout;:";
			foreach($GoodWords as $Word)
				echo " $Word";
	echo "</p>\n";
	echo "<p>The following words can not be made from the letters in the phrase &qot;$Phrase&quot;:";
			foreach($BadWords as $Word)
				echo " $Word";
	echo "</p>\n";
	echo "<hr />\n";
			
	?>
</body>
</html>