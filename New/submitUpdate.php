<?php 
$verifyCode = getenv('SET_VERIFY');
$onPage = $_POST["INTERNAL"];

if ($verifyCode == $onPage){
    $table = $_POST["table"];
    $key = $_POST["id"];
    $header1 = $_POST["Header"];
    $image = $_POST["url"];
    $today1 = $_POST["date"];
    $image = str_replace("open","uc",$image);
    $update1 = $_POST["update"];
    $header = pg_escape_string($header1);
    $update = pg_escape_string($update1);
    $today = pg_escape_string($today1);
    require 'connection.inc.php'; 
    $query = "UPDATE $table SET header = '$header', update = '$update', image = '$image', blank_1 = '$today' WHERE news_id = $key";
    echo $query;
    $dbconn->query($query);
}
header( 'Location: /Admin.html') ;

?>
