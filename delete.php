<?php

require_once 'db-connect.php';


$sql = "delete from dosen";
$starTime = microtime(true);
 $result = pg_query($dbconn, $sql);
if(!$result){
  echo pg_last_error($dbconn);
} else {
  echo "Deleted successfully\n";
}
$finishTime = microtime(true) - $starTime;
echo "$finishTime detik";

// Close the connection
pg_close($dbconn);
?>