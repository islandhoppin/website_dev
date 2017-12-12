<?php 
$verifyCode = getenv('SET_VERIFY');
$onPage = $_POST["INTERNAL"];

if ($verifyCode == $onPage){
    $table = $_POST["table"];
    require '../connection.inc.php';
    	if ($table == "newsupdates"){
    		$key = $_POST["id"];
    		$header = pg_escape_string($_POST["Header"]);
    		$image = $_POST["url"];
    		$today = pg_escape_string($_POST["date"]);
    		$update = pg_escape_string($_POST["update"]);
    		$query = "UPDATE newsupdates SET header = '$header', update = '$update', image = '$image', blank_1 = '$today' WHERE news_id = $key";
    	}
    	if ($table == "customertut"){
    		$key = $_POST["id"];
    		$header = pg_escape_string($_POST["Header"]);
    		$image = $_POST["url"];
    		$today = pg_escape_string($_POST["date"]);
    		$update = pg_escape_string($_POST["update"]);
    		$query = "UPDATE customertut SET header = '$header', update = '$update', image = '$image', blank_1 = '$today' WHERE news_id = $key";
    	}
    	if ($table == "faqList"){
    		$faq_id = $_POST["faq_id"];
    		$question = pg_escape_string($_POST["question"]);
    		$answer = pg_escape_string($_POST["answer"]);
    		$faqorder = $_POST["faqorder"];
    		$show = pg_escape_string($_POST["show"]);
    		$today = $_POST["blank_1"];
    		$query = "UPDATE faqList SET question = '$question', answer = '$answer', faqorder = '$faqorder', show = '$show', blank_1 = '$today' WHERE faq_id = $faq_id";
    	}
    	if ($table == "priceSchedule"){
    		$price_id = $_POST["price_id"];
    		$season = pg_escape_string($_POST["season"]);
    		$twopax = pg_escape_string($_POST["twopax"]);
    		$threepax = pg_escape_string($_POST["threepax"]);
    		$fourpax = pg_escape_string($_POST["fourpax"]);
    		$fivepax = pg_escape_string($_POST["fivepax"]);
    		$sixpax = pg_escape_string($_POST["sixpax"]);
    		$sevenpax = pg_escape_string($_POST["sevenpax"]);
    		$eightpax = pg_escape_string($_POST["eightpax"]);
    		$show = $_POST["show"];
    		$query = "UPDATE priceSchedule SET season = '$season', twopax = '$twopax', threepax = '$threepax', fourpax = '$fourpax', fivepax = '$fivepax', sixpax = '$sixpax', sevenpax = '$sevenpax', eightpax = '$eightpax', show = '$show' WHERE price_id = $price_id";
    	}
    $dbconn->query($query);
}
header( 'Location: ../Content.php?INTERNAL=$onPage');

?>
