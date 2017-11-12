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
    $price_id = $_POST["price_id"];
    require 'connection.inc.php'; 
    $query = "UPDATE priceSchedule SET season = '$season', twopax = '$twopax', threepax = '$threepax', fourpax = '$fourpax', fivepax = '$fivepax', sixpax = '$sixpax', sevenpax = '$sevenpax', eightpax = '$eightpax', show '$show' WHERE price_id = $price_id";
    echo $query;
    $dbconn->query($query);
}
header( 'Location: /Admin.html') ;

?>
