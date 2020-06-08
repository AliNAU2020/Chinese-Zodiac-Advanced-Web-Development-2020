<?php

//include the inc_connect.php file with database
//connection database

/*set a cookie if this is the first visit - the expires argument is 1 day to prevent
  visits from incrementing each time the user returns to the page that contains the 
  site counter
*/
if(empty($_COOKIE["visits"]))
{
	//increment the counter in the database
	mysql_query("UPDATE visit_counter " .
	            "SET counter = counter + 1" .
				"WHERE id = 1 ");
	//query the visit_counter table and assign the counter
	//value to the $visitors variable
	$queryResult = mysql_query("SELECT counter ".
		  "FROM visit_counter WHERE id = 1");
	if (($row = mysql_fetch_assoc($queryResult)) !== FALSE)
	   $visitors = $row['counter'];
	else
	   $visitors = 1;
	//Set the cookie value
	setcookie("visits", $visitors, time()+(60*60*24));
}
else
{
	//Otherwise, assign the cookie value to the $visitor
	//variable
	$visitors = $_COOKIE["visits"];
}
?>
	