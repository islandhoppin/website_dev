<?php 
$verifyCode = getenv('SET_VERIFY');
$onPage = $_POST["INTERNAL"];

if ($verifyCode == $onPage){
    $header = $_POST["Header"];
    $image = $_POST["url"];
    $image = str_replace("open","uc",$image);
    $update = $_POST["update"];
    $today = date("F j, Y");  
    require 'connection.inc.php'; 
    $query = "INSERT INTO customertut (header, update, image, blank_1) VALUES ('$header', '$update', '$image', '$today')";
    $dbconn->query($query);
}
header( 'Location: /Admin.html') ;
?>
