<?php 
$verifyCode = getenv('SET_VERIFY');
$onPage = $_POST["INTERNAL"];
    if ($onPage == ""){
        header( 'Location: /Admin.html') ;
    }
    if ($onPage != $verifyCode){
        echo "Sorry Buddy";
        header( 'Location: /Admin.html') ;
    }
    
$header = $_POST["Header"];
$image = $_POST["url"];
$image = str_replace("open","uc",$image);
$update = $_POST["update"];
$today = date("F j, Y");  
require 'connection.inc.php'; 
$query = "INSERT INTO newsupdates (header, update, image, blank_1) VALUES ('$header', '$update', '$image', '$today')";
$dbconn->query($query);
header( 'Location: /Admin.html') ;

?>
