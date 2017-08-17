<?php 

$host = "ec2-184-72-230-93.compute-1.amazonaws.com";
$port = "5432";
$dbname = "dcot5ea8vgmr1t";
$user = "nwktolobhorubg";
$password = "85b3da606efa12296f61a6139f968445b14631032d8a3990e2cccf76c2b11b60";
$pg_options = "--client_encoding=UTF8";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
$dbconn = pg_connect($connection_string);


if($dbconn){
    echo "Connected to ". pg_host($dbconn); 
}else{
    echo "Error in connecting to database.";
}

echo "<br />";

