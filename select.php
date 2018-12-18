<?php 

require_once 'db-connect.php';

$starTime = microtime(true);
$result = pg_query($dbconn, "SELECT * FROM dosen");
if (!$result) {
    echo "An error occurred.\n";
    exit;
}

$arr = pg_fetch_all($result);

foreach ($arr as $a) {
	echo $a['nidn'] . " ";
	echo $a['nama'] . " ";
	echo $a['alamat'] . " \n";

}

echo "\n";
// print_r($arr);
$finishTime = microtime(true) - $starTime;
echo "$finishTime detik";
?>