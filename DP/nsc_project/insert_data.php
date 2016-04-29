<?php
include("db_connect.php");
// mysqli_query("SET NAMES utf8",$conn);
// mysqli_query("SET CHARACTER_SET utf8");
  //加入連接資料庫的php檔案

//新增測試
$id = $_POST["name"];
$des = $_POST["description"];

for($i = 0; $i< count($id) ; $i++){
	$name = $i+rand(0,9999);
	$des_tmp = $des[$i];
	$insert = "INSERT INTO requirement (description) VALUES ('".$des_tmp."')";
		if ($conn->query($insert) === TRUE) {
    		echo "<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>";
    	}
		else {
    		echo "Error: " . $sql . "<br>" . $conn->error."<br>";
		}
}
echo $id;
mysqli_close($conn);
?>