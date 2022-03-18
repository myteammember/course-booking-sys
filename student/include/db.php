<?php

$server = "sql6.freemysqlhosting.net";
$user = "sql6479335";
$pass = "s6Ffr1FSz4";
$data = "sql6479335";

$conn = mysqli_connect($server,$user,$pass,$data);

if($conn -> connect_error){
	die("connection failed: ".$conn->connect_error);
}

?>