<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <title>View Zodiac Feedback</title>
</head>

<body>
<?php
// Validate feedback form fields.
if (empty($_POST['sender']) || empty($_POST['message']))
{
  echo "<p>You must enter your name and a message. Click your browser's back button to return to the feedback form.</p>";
}
else 
{
  //Use inc_connect to connect to the server and database.
  include("includes/inc_connect.php");
   

  // Check connection
  if ($DBConnect === FALSE)
  {
    echo "<p>Unable to connect to the database server.</p>"
      . "<p>Error code " . mysqli_errno()
      . ": " . mysqli_error() . "</p>";
  }  
  else 
  {
    //select the database
    $db = mysqli_select_db($DBConnect, $db_name);
    if ($db === FALSE) {
      echo "<p>Unable to connect to the database.</p>"
      . "<p>Error Code " . mysqli_errno()
      . ": " . mysqli_error() . "</p>";
      mysqli_close($DBConnect);
      $DBConnect = FALSE;
    }
    else 
    {
      // If database connection is valid, select the table to insert values.

      $db_table = "zodiacfeedback";
      $MsgDate = date("Y-m-d");
      $MsgTime = date("H:i:sa");            
      $Sender = stripslashes($_POST['sender']);
      $Message = stripslashes($_POST['message']);
        if (isset($_POST['public_message']))
          $PubMsg = 'Y';
        else 
          $PubMsg = 'N';
      $SQLstring ="INSERT INTO $db_table (message_date, message_time, sender, message, public_message) VALUES ('$MsgDate', '$MsgTime', '$Sender', '$Message', '$PubMsg')";
      $QueryResult = @mysqli_query($DBConnect, $SQLstring);
      if ($QueryResult === FALSE) // Provide status if feedback fields not inserted
        echo "<p>Unable to insert the values into the table</p>"
        . "<p>Error code " . mysqli_errno($DBConnect)
        . ": " . mysqli_error($DBConnect) . "</p>";
      else 
        // Thank customer for feedback if insert was successful.
        echo "<p>Thank you $Sender! Your feedback \"$Message\" has been received and submitted on $MsgDate at $MsgTime.</p>";
        echo "<p><a href=\"zodiac_feedback.html\"><b>Submit additional feedback?</b></a></p>\n";
        mysqli_close($DBConnect);
    }
  }
} 
?>

</div><!-- end of content -->
<div id="footer">
<?php include("includes/inc_footer.php");?>
</div> <!--end of footer--> 
</div> <!--end of background-->
</body> 
</html>
