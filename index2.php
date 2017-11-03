<?php
$dbopts = parse_url(getenv('DATABASE_URL'));
$driver = 'pgsql';
$user = $dbopts["user"];
$password = $dbopts["user"];
$host = $dbopts["host"];
$port = $dbopts["port"];
$dbname = $dbopts["port"];
$conn = ("host=$host port=$port dbname=$dbname user=$user password=$password sslmode=require");
try{
	// create a PostgreSQL database connection
	echo $conn;
	$dbconn = new PDO($conn);
 
	// display a message if connected to the PostgreSQL successfully
	if($dbconn){
		echo "Connected to the <strong>$db</strong> database successfully!";
	}
}catch (PDOException $e){
	// report error message
	echo $e->getMessage();
}


?>