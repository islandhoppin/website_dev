<?php 
$table = $_POST["table"];
$id = $_POST["id"];
$idnum = $_POST["idnum"];
require 'connection.inc.php'; 
$query = "Delete from $table where $id = $idnum";
echo $query;
$dbconn->query($query);
header( 'Location: /Admin.php') ;

?>