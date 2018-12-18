<?php

require_once 'db-connect.php';

$starTime = microtime(true);

for ($i=1; $i<=3200; $i++){
	$sql = "insert into dosen (nidn,nama,alamat) values ('$i','Jarwo','Jakarta');"; 
	$result = pg_query($dbconn, $sql);
}
$result = pg_query($dbconn, $sql);
if(!$result){
  echo pg_last_error($dbconn);
} else {
  echo "\n";
}
$finishTime = microtime(true) - $starTime;
echo "$finishTime detik";

// Close the connection
pg_close($dbconn);

?>