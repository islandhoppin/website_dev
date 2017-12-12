<?php 
$verifyCode = getenv('SET_VERIFY');
$onPage = $_POST["INTERNAL"];

if ($verifyCode == $onPage){
    $table = $_POST["table"];
    require '/New/connection.inc.php'; 
    	if ($table == "newsupdates"){
    		$header = pg_escape_string($_POST["Header"]);
    		$image = $_POST["url"];
    		$update = pg_escape_string($_POST["update"]);
    		$today = date("F j, Y");  
    		$query = "INSERT INTO newsupdates (header, update, image, blank_1) VALUES ('$header', '$update', '$image', '$today')";
    	}
    	if ($table == "customertut"){
    		$header = pg_escape_string($_POST["Header"]);
    		$image = $_POST["url"];
    		$update = pg_escape_string($_POST["update"]);
    		$today = date("F j, Y");
    		$query = "INSERT INTO customertut (header, update, image, blank_1) VALUES ('$header', '$update', '$image', '$today')";
    	}
    	if ($table == "faqList"){
    		$question = pg_escape_string($_POST["question"]);
    		$answer = pg_escape_string($_POST["answer"]);
    		$faqorder = $_POST["faqorder"];
    		$show = pg_escape_string($_POST["show"]);
    		$today = date("F j, Y");
    		$query = "INSERT INTO faqList (question, answer, faqorder, show, blank_1) VALUES ('$question', '$answer', '$faqorder', '$show', '$today')";
    	}
    	if ($table == "priceSchedule"){
    		$season = pg_escape_string($_POST["season"]);
    		$twopax = pg_escape_string($_POST["twopax"]);
    		$threepax = pg_escape_string($_POST["threepax"]);
    		$fourpax = pg_escape_string($_POST["fourpax"]);
    		$fivepax = pg_escape_string($_POST["fivepax"]);
    		$sixpax = pg_escape_string($_POST["sixpax"]);
    		$sevenpax = pg_escape_string($_POST["sevenpax"]);
    		$eightpax = pg_escape_string($_POST["eightpax"]);
    		$show = $_POST["show"];
    		$query = "INSERT INTO priceSchedule (season, twopax, threepax, fourpax, fivepax, sixpax, sevenpax, eightpax, show) VALUES ('$season', '$twopax', '$threepax', '$fourpax', '$fivepax', '$sixpax', '$sevenpax', '$eightpax', '$show')";
    	}
    
    $dbconn->query($query);
}
header( 'Location: /New/Content.php?INTERNAL=$onPage');

?>
