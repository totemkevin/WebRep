<?php
include('../connDB/mysql.php');
	include('../connDB/shoppinglist.php');
	$shoppinglist=new shoppinglist(new Mysql());
	$shoppinglist->Select();
	if(isset($_POST['name']))
	{
		$shoppinglist->Insert($_POST['name'],$_POST['depart'],$_POST['shopclass'],$_POST['shopname'],$_POST['deadline']);
	}
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>
			Just for delicious
		</title>
  		<link rel="stylesheet"  type="text/css" href="../css/usepage.css">
  		<script src="../jquery-2.1.3.min.js"></script>	
</head>
<body>
	<div id="content">
		<?php include("head.php");?>
		<div id="leftField" class="longfield">
		1 totem 豬肉堡*1+香雞堡*1=60元<br>
		2 totem 豬肉堡*1+香雞堡*1=60元
		
		</div>
	</div>
	
</body>