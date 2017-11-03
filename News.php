<?php
require 'connection.inc.php'; 
$query = "SELECT * FROM test_table";
$result = $dbconn->query($query);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $row['id'];
    echo $row['name'];
}

?>