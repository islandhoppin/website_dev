<?php 
$verifyCode = getenv('SET_VERIFY');
$onPage = $_POST["INTERNAL"];
//Script to update FAQ
if ($verifyCode == $onPage){
    $faq_id = $_POST["faq_id"];
    $question = pg_escape_string($_POST["question"]);
    $answer = pg_escape_string($_POST["answer"]);
    $faqorder = $_POST["faqorder"];
    $show = pg_escape_string($_POST["show"]);
    $today1 = $_POST["blank_1"];
    require 'connection.inc.php'; 
    $query = "UPDATE faqList SET question = '$question', answer = '$answer', faqorder = '$faqorder', show = '$show', blank_1 = '' WHERE faq_id = $faq_id";
}
header( 'Location: /Admin.html') ;

?>
