<?php
include("../SQL/db_connect.php");
// mysqli_query("SET NAMES utf8",$conn);
// mysqli_query("SET CHARACTER_SET utf8");
  //加入連接資料庫的php檔案

//新增測試
$aid = $_POST["name"];
$ades = $_POST["description"];

$id="";
$des="";

for($i=0;$i<count($aid);$i++)
{
	$id+=$aid[$i];
}

for($i=0;$i<count($ades);$i++)
{
	$des+=$ades[$i];
}

$insert = "INSERT INTO `requirement` (`description`) VALUES ('".$id.$des."')";
if ($conn->query($insert) === TRUE) {
echo "<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>";
}
else {
echo "Error: " . $sql . "<br>" . $conn->error."<br>";
}

mysqli_close($conn);
?>