<?php
$DB_HOST="140.127.74.225";
$DB_LOGIN="root";
$DB_PASSWORD="ma302";
$DB_NAME="patterntable";
if(!@$conn=mysql_connect($DB_HOST,$DB_LOGIN,$DB_PASSWORD))
	die("無法對資料庫連線");
mysql_query("SET NAMES 'UTF8'");
if(!@mysql_select_db($DB_NAME))
	die("無法使用資料庫");