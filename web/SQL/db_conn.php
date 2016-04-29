<?php
$DB_HOST="localhost";
$DB_LOGIN="root";
$DB_PASSWORD="123";
$DB_NAME="person";
if(!@$conn=mysql_connect($DB_HOST,$DB_LOGIN,$DB_PASSWORD))
	die("無法對資料庫連線");
mysql_query("SET NAMES 'UTF8'");
if(!@mysql_select_db($DB_NAME))
	die("無法使用資料庫");