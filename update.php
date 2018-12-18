<?php 

require_once 'db-connect.php';


$sql = "update dosen set nama ='anjar' where nama = 'Jarwo'";
$starTime = microtime(true);
$result = pg_query($dbconn, $sql);
if(!$result){
  echo pg_last_error($dbconn);
} else {
	echo "\n";
 	echo "Updated successfully.";
}

$finishTime = microtime(true) - $starTime;
echo "$finishTime detik";

// Close the connection
pg_close($dbconn);
?>