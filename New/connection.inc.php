<?php
//$dbopts = parse_url(getenv('DATABASE_URL'));
$dbopts = parse_url('postgres://zgwpcdwcouuqcg:dd18119e9e3c9b3989ab441e15bb17dd76328892183ac57ca14ddfbbe6c789a4@ec2-23-23-228-115.compute-1.amazonaws.com:5432/d55rf3q3mqghto');
$driver = 'pgsql';
$user = $dbopts["user"];
$password = $dbopts["pass"];
$host = $dbopts["host"];
$port = $dbopts["port"];
$dbname = ltrim($dbopts["path"],'/');
$conn = ("pgsql:host=$host port=$port dbname=$dbname user=$user password=$password sslmode=require");
try{
	// create a PostgreSQL database connection
	global $dbconn;
	$dbconn = new PDO($conn);
	$dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
	// display a message if connected to the PostgreSQL successfully
	
}catch (PDOException $e){
	// report error message
	echo $e->getMessage();
}

?>