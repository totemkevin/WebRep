<?php

header("Content-Type:text/html; charset=utf-8");


$jsonString = '
{
    "location": "高雄市燕巢區深中路62號",
    "name": "高師大軟工",
    "student": [
        {
            "s_id": 1,
            "s_name": "LSC",
            "tell": "123"
        },
        {
            "s_id": 2,
            "s_name": "CSL",
            "tell": "456"
        },
        {
            "s_id": 3,
            "s_name": "GGG",
            "tell": "789"
        }
    ]
}';

$parseArray = json_decode($jsonString);
for ($x = 0; $x <3; $x++) {
	echo $parseArray->student[$x]->s_id."  ".$parseArray->student[$x]->s_name." ".$parseArray->student[$x]->tell."<br>";
}

//echo $_GET['variable'];
?>