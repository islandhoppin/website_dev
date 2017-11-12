<?php 
$verifyCode = getenv('SET_VERIFY');
$onPage = $_POST["INTERNAL"];

if ($verifyCode == $onPage){
    $season = pg_escape_string($_POST["season"]);
    $twopax = pg_escape_string($_POST["twopax"]);
    $threepax = pg_escape_string($_POST["threepax"]);
    $fourpax = pg_escape_string($_POST["fourpax"]);
    $fivepax = pg_escape_string($_POST["fivepax"]);
    $sixpax = pg_escape_string($_POST["sixpax"]);
    $sevenpax = pg_escape_string($_POST["sevenpax"]);
    $eightpax = pg_escape_string($_POST["eightpax"]);
    $show = $_POST["show"];
    require 'connection.inc.php'; 
    $query = "INSERT INTO priceSchedule (season, twopax, threepax, fourpax, fivepax, sixpax, sevenpax, eightpax, show) VALUES ('$season', '$twopax', '$threepax', '$fourpax', '$fivepax', '$sixpax', '$sevenpax', '$eightpax', '$show')";
    $dbconn->query($query);
}
header( 'Location: /Admin.html') ;

?>
