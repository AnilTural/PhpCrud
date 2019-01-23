

<?php

$databaseHost = "localhost";
$databaseName = "sehirler";
$databaseUsername = "root";
$databasePassword = "";
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if($mysqli -> connect_error){
	echo "Baglanamadi";
}

echo "Baglanti saglandi";
 
?>