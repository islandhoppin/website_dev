<?php 
$verifyCode = getenv('SET_VERIFY');
$onPage = $_POST["INTERNAL"];

if ($verifyCode == $onPage){
    $header1 = $_POST["Header"];
    $image = $_POST["url"];
    $image = str_replace("open","uc",$image);
    $update1 = $_POST["update"];
    $today = date("F j, Y");  
    $header = pg_escape_string($header1);
    $update = pg_escape_string($update1); 
    require 'connection.inc.php'; 
    $query = "INSERT INTO customertut (header, update, image, blank_1) VALUES ('$header', '$update', '$image', '$today')";
    $dbconn->query($query);
}
header( 'Location: /Admin.html') ;
?>
