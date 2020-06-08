<div id = "footer">Copyright &copy; 2020 Ali Shaikh. All rights reserved. <br><br>

<?php

<?php include("includes/inc_site_counter.php"); ?>
echo <p>Total visitors to this site: <?php echo $visitors: ?></p>

$prov_array = file("proverbs.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$proverbcount = count($prov_array);
$index = rand(0, $proverbcount-1);
echo "A randomly displayed Chinese proverb read from a text file<br />";
echo $prov_array[$index]."<br />";
echo "<img src=".getimage().">";

function getimage() {
  $files = glob( "images/Dragon*.jpg");
  shuffle($files);
  return $files['0'];
}

$SQLQuery="select count(*) from random_proverb;";
$result=@mysql_query($SQLQuery, $DBConnect);
if ($result===FALSE) {
        echo "Internal Error (3)";
    }
// Get array from the result set
$count_arr = mysql_fetch_row($result);  
// Get count of all proverbs in the table 
$count = $count_arr[0];
// Get random number within bounds of count
$proverb_id = rand(1, $count);
// Set unicode
mysql_query("set character_set_results='utf8'");
$SQLQuery = "select proverb_text " .
            "from random_proverb " .
            "where proverb_id=" . $proverb_id . ";";
// Get results and display them
$result=@mysql_query($SQLQuery, $DBConnect);
$proverb_arr = mysql_fetch_array($result);
$proverb = $proverb_arr[0];
echo "<hr />";
echo "<p>$proverb</p>";
// Update count
$update_query = "UPDATE random_proverb " .
    "SET proverb_count = proverb_count + 1 " .
    "WHERE proverb_id = " . $proverb_id . ";";
mysqli_query($mysqli, $update_query)
            or die(mysqli_error($mysqli));
?>


</div>