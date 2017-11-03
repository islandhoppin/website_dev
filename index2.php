<?php
$dbopts = parse_url(getenv('DATABASE_URL'));
$driver = 'pgsql';
$user = $dbopts["user"];
$password = $dbopts["user"];
$host = $dbopts["host"];
$port = $dbopts["port"];
$dbname = $dbopts["port"];

try{
	// create a PostgreSQL database connection
	$dbconn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password sslmode=require");
 
	// display a message if connected to the PostgreSQL successfully
	if($dbconn){
		echo "Connected to the <strong>$db</strong> database successfully!";
	}
}catch (PDOException $e){
	// report error message
	echo $e->getMessage();
}


?>