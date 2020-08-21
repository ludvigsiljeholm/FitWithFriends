<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "fitwithfriends";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}



// How to connect using php