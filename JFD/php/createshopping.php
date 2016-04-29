<?php
	include('../connDB/mysql.php');
	include('../connDB/shoplist_shopinfo.php');
	include('../connDB/shoppinglist.php');
	$shoplist_shopinfo =new shoplist_shopinfo(new Mysql());
	$shoppinglist=new shoppinglist(new Mysql());
	if(isset($_GET['id']))
	{
		$shoplist_shopinfo->SelectByID($_GET['id']);
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
		<div id="leftField" class="field">
			Shop Class:	<?php echo $shoplist_shopinfo->shopclass; ?><br>
			Shop Name:	<?php echo $shoplist_shopinfo->shopname; ?><br>
			Shop Address:	<?php echo $shoplist_shopinfo->address; ?><br>
			Shop Opentime:	<?php echo $shoplist_shopinfo->opentime; ?><br>
			Shop Info:	<?php echo $shoplist_shopinfo->info; ?><br>
		
		<HR color="#000000" size="2" ></HR>
			<form action="findshopping.php" method="post" target="_self">
				發起人:  <input type="text" name="name"></input><br>
				系級:    <input type="text" name="depart"></input><br>
				截止時間:<input type="text" name="deadline"></input><br>
				<input type="hidden" name="shopclass" value="<?php echo $shoplist_shopinfo->shopclass;?>"></input>
				<input type="hidden" name="shopname" value="<?php echo $shoplist_shopinfo->shopname;?>"></input>
				<input type="submit" value="送出"/>
			</form>
		</div>
		<div id="rightField" class="field">
			
		</div>
	</div>
	
</body>