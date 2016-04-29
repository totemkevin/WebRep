<?php
	//連接資料庫
	$servername = "127.0.0.1";
	$username = "root";
	$password = "123";
	$dbname = "designpattern";

	//建立連線
	$conn = new mysqli($servername, $username, $password, $dbname);

	//檢查連線
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
?>