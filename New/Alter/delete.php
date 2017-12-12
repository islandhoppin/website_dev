<?php 
$verifyCode = getenv('SET_VERIFY');
$onPage = $_POST["INTERNAL"];

if ($verifyCode == $onPage){
    $table = $_POST["table"];
    $id = $_POST["id"];
    $idnum = $_POST["idnum"];
    require '../connection.inc.php'; 
    $query = "Delete from $table where $id = $idnum";
    $dbconn->query($query);
}
header('Location: ../Content.php?INTERNAL='.$onPage);

?>