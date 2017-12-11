<?php 
$verifyCode = getenv('SET_VERIFY');
$onPage = $_POST["INTERNAL"];
//Script to create new FAQ
if ($verifyCode == $onPage){
    $question = pg_escape_string($_POST["question"]);
    $answer = pg_escape_string($_POST["answer"]);
    $faqorder = $_POST["faqorder"];
    $show = pg_escape_string($_POST["show"]);
    $today = date("F j, Y"); 
    require 'connection.inc.php'; 
    $query = "INSERT INTO faqList (question, answer, faqorder, show, blank_1) VALUES ('$question', '$answer', '$faqorder', '$show', '$today')";
    $dbconn->query($query);
}
header( 'Location: /Admin.html') ;

?>
