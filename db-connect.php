<?php 

$host = "localhost";
$port = "5432";
$dbname = "kuliah";
$user = "postgres";
$password = "123";

$connection_string = "host=$host port=$port dbname=$dbname user=$user password=$password";
$dbconn = pg_connect($connection_string);


if($dbconn){
    echo "Succesfully
    \n"; 
}else{
    echo "Error in connecting to database.";
    exit;
}
?>