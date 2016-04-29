<?php

include("db_conn.php");
include("db_func.php");

function getJson($datafield,$name)
{

if($name!=""){
$sql = 
"
SELECT * 
FROM `".$datafield."` 
WHERE SUBSTR(name,1,".strlen($_POST["text"]).") 
LIKE UPPER('%$name%');
";
$query = db_query($sql);
$rownums = db_num_rows($query);


for($i=0;$i<$rownums;$i++){
	$result = mysql_fetch_assoc($query);
	$rows[] = $result;
}
echo json_encode($rows);
}
}
//getJson("person","person");
//echo $_POST["text"];
getJson("a",$_POST["text"]);

?>

