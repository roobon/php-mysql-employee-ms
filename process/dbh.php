<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "mysql";
$dBName = "ems_php_mysql";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if (!$conn) {
	echo "Databese Connection Failed";
}
